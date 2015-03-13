<doctype>html</doctype>
<html lang="en">
  <head>
    <script type="text/javascript">.</script>
  </head>
  <body>
    <h1>Jade - node template engine</h1>
    <div id="container" class="col">
      <if>
        youAreUsingJade
        <p>You are amazing</p>
      </if>
      <else>
        <p>Get on it!</p>
      </else>
      <p>
        .
        <Jade>is a terse and simple</Jade>
        <templating>language with a</templating>
        <strong>focus on performance</strong>
        <and>powerful features.</and>
      </p>
    </div>
  </body>
</html>