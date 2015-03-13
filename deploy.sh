#!/bin/bash

# ----------------------
# KUDU Deployment Script
# ----------------------

# Helpers
# -------

exitWithMessageOnError () {
  if [ ! $? -eq 0 ]; then
    echo "An error has occured during web site deployment."
    echo $1
    exit 1
  fi
}

# Prerequisites
# -------------

# Verify node.js installed
hash node 2>/dev/null
exitWithMessageOnError "Missing node.js executable, please install node.js, if already installed make sure it can be reached from current environment."

# Setup
# -----

SCRIPT_DIR="$( cd -P "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
ARTIFACTS=$SCRIPT_DIR/artifacts

if [[ ! -n "$DEPLOYMENT_SOURCE" ]]; then
  DEPLOYMENT_SOURCE=$SCRIPT_DIR
fi

if [[ ! -n "$NEXT_MANIFEST_PATH" ]]; then
  NEXT_MANIFEST_PATH=$ARTIFACTS/manifest

  if [[ ! -n "$PREVIOUS_MANIFEST_PATH" ]]; then
    PREVIOUS_MANIFEST_PATH=$NEXT_MANIFEST_PATH
  fi
fi

if [[ ! -n "$DEPLOYMENT_TARGET" ]]; then
  DEPLOYMENT_TARGET=$ARTIFACTS/wwwroot
else
  KUDU_SERVICE=true
fi

#if [[ ! -n "$KUDU_SYNC_CMD" ]]; then     # このifをコメントアウトしないと、$KUDU_SYNC_CMDに入っている変な値が使われてしまう
  # Install kudu sync
  echo Installing Kudu Sync
  npm install kudusync -g --silent
  exitWithMessageOnError "npm failed"

  if [[ ! -n "$KUDU_SERVICE" ]]; then
    # In case we are running locally this is the correct location of kuduSync
    KUDU_SYNC_CMD="kuduSync"
  else
    # In case we are running on kudu service this is the correct location of kuduSync
    KUDU_SYNC_CMD="$APPDATA/npm/node_modules/kuduSync/bin/kuduSync"
  fi
#fi

##################################################################################################################################
# Deployment
# ----------

echo Handling Basic Web Site deployment.

# 1. KuduSync
if [[ "$IN_PLACE_DEPLOYMENT" -ne "1" ]]; then
  $KUDU_SYNC_CMD -v 50 -f "$DEPLOYMENT_SOURCE" -t "$DEPLOYMENT_TARGET" -n "$NEXT_MANIFEST_PATH" -p "$PREVIOUS_MANIFEST_PATH" -i ".git;.hg;.deployment;deploy.sh"
  exitWithMessageOnError "Kudu Sync failed"
fi

##################################################################################################################################

echo Running Composer.
cd $DEPLOYMENT_TARGET
"D:\Program Files (x86)\PHP\v5.4\php.exe" composer.phar update --prefer-dist -v

#echo Running FuelPHP migration.
#"D:\Program Files (x86)\PHP\v5.4\php.exe" oil refine migrate
cd $DEPLOYMENT_SOURCE

echo "Finished successfully."
