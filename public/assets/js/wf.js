$(function() {
	var wf = {

		ui: {
			alerts: function(msgs) {
				var self = this;
				var time = -50;
				for (var key in msgs) {

					setTimeout(function() {
						var args = [msgs[key].text, msgs[key].status];
						return function() {
							self.alert.apply(self, args);
						}
					}(), time += 50);
				}
			},
			alert: function(msg, type) {
				$('#alertBox').append($('<div>', {
					class: 'alert alert-' + type
				}).append($('<p>').html(msg)).hide().fadeIn('fast', function() {
					var _this = this;
					$(_this).timeOut = setTimeout(function() {
						$(_this).fadeOut('fast', function() {
							$(_this).remove();
						});
					}, 3000);
				}).on('click', function() {
					clearTimeout($(this).timeOut);
					$(this).fadeOut('fast', function() {
						$(this).remove();
					});
				}));
			}
		},

		start: function() {
			this.init();
			return this;
		},
		init: function() {

			var self = this;
			console.log('start!');


			var _getMyPet = function(e) {
				var life = e.pet.life;
				var pet = e.pet.pet;

				$room = $(".pet-room.my-pet[data-roomno='" + e.pet.pet.room_no + "']");
				$room.children('.pet-empty').hide();
				$room.find('.pet-entity .img-thumbnail').attr('src', '/imgs/' + life.img_src);
				$room.find('.pet-entity h4').html(life.name_jp);
				$room.find('.pet-status-lv').html('Lv.'+e.pet.pet.level);
				$room.find('.pet-status-strength').html('強さ : '+e.pet.pet.strength);
				$room.find('.pet-status-inteligence').html('賢さ : '+e.pet.pet.inteligence);
				$room.find('.pet-status-fertility').html('繁殖力 : '+e.pet.pet.fertility);
				$room.find('.pet-status-lifespan').html('寿命 : '+e.pet.pet.lifespan);
				$room.children('.pet-entity').removeClass('hide');
				$room.children('.pet-entity').show();
				$room.children('.pet-empty').hide();
			};

			//新ペット作成ボタン
			$('.generate-pet-button').on('click', function() {
				self.generatePet($(this).data('room-no'), function(e) {
					console.log(e);
					if (e.msgs.length >= 1) {
						self.ui.alerts(e.msgs);
					}
					_getMyPet(e);
				});
			});
			$('.release-pet-button').on('click', function() {
				var _this = this;
				self.releasePet($(this).data('room-no'), function(e) {

					if (e.msgs.length >= 1) {
						self.ui.alerts(e.msgs);
					}
					if (e.result) {
						$(_this).parents('.pet-room').children('.pet-entity').hide();
						$(_this).parents('.pet-room').children('.pet-empty').show();
					}
				});
			});

			//ペットルームに対してajax
			$('.pet-room.my-pet').each(function(i, e) {
				var _this = e;

				self.getMyPet($(e).data('roomno'), _getMyPet);

			});

			//プロフィール編集
			$('#editProfileForm').on('submit',function(){
				self.editProfile($(this).find('input').val(),function(e){

					if (e.msgs.length >= 1)self.ui.alerts(e.msgs);

				});
				return false;
			});

			//アラートをクリックすると消える処理
			$('#alertBox > .alert').on('click', function() {
				clearTimeout($(this).timeOut);
				$(this).fadeOut('fast', function() {
					$(this).remove();
				});
			});
			//新規アカウント作成ボタン
			$('#registerAccount').on('click', function() {
				self.registerAccount($('#registerAccountUsername').val(), $('#registerAccountEmail').val(), $('#registerAccountPassword').val(), function(e) {
					if (e.msgs.length >= 1) {
						self.ui.alerts(e.msgs);
					}
					if (e.result) {
						var $form = $('<form>', {
							action: '/login',
							method: 'POST'
						});
						$form.append($('<input>', {
							name: 'username'
						}).val($('#registerAccountUsername').val()));
						$form.append($('<input>', {
							name: 'password'
						}).val($('#registerAccountPassword').val()));
						$form.submit();
					}
					console.log(e);
				});
			});
			$('#messageReceptor > span').each(function(i, e) {
				self.ui.alert($(e).data('text'), $(e).data('status'));
			});
		},

		registerAccount: function(username, email, password, callback) {
			$.ajax({
				type: "POST",
				url: "/api/user/register",
				data: {
					username: username,
					email: email,
					password: password
				}
			}).done(callback || function(e) {
				console.log(e);
			});

		},
		generatePet: function(roomNo, callback) {
			$.ajax({
				type: "POST",
				url: "/api/pet/generate",
				data: {
					room_no: roomNo
				}
			}).done(callback || function(e) {
				console.log(e);
			});
		},
		releasePet: function(roomNo, callback) {
			$.ajax({
				type: "POST",
				url: "/api/pet/release",
				data: {
					room_no: roomNo
				}
			}).done(callback || function(e) {
				console.log(e);
			});
		},
		getMyPet: function(roomNo, callback) {
			$.ajax({
				type: "GET",
				url: "/api/pet/mypet",
				data: {
					room_no: roomNo
				}
			}).done(callback || function(e) {
				console.log(e);
			});
		},
		editProfile : function(screenName,callback){
			$.ajax({
				type: "post",
				url: "/api/user/edit",
				data: {
					screen_name: screenName
				}
			}).done(callback || function(e) {
				console.log(e);
			});
		},


	}.start();

});
