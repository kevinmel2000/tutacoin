$.noConflict();
jQuery( document ).ready(function( $ ) {

  $(function() {
    $( "#tgl_lahir" ).datepicker(
      { dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true});
    $( "#tgl_masuk_pegawai" ).datepicker(
      { dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true});
    $( "#tmt_pangkat" ).datepicker(
      { dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true});
  });

  $(document).ready(function () {
      $('#iframe').on('load', function () {
          $('#loader1').hide();
      });
  });

  $('#myModal').on('shown.bs.modal', function () {
    $(this).find('iframe').attr('src','/image-kartu-induk-pegawai')
  })
  $('#myModal').on('hidden.bs.modal', function () {
    document.location.reload();
  })

});

(function(){

  var app = angular.module('jmApp', []);

    app.controller('MainCtrl', function($scope) {
    });

    app.directive('validNumber', function() {
      return {
        require: '?ngModel',
        link: function(scope, element, attrs, ngModelCtrl) {
          if(!ngModelCtrl) {
            return;
          }

          ngModelCtrl.$parsers.push(function(val) {
            if (angular.isUndefined(val)) {
                var val = '';
            }

            var clean = val.replace(/[^-0-9\.]/g, '');
            var negativeCheck = clean.split('-');
			var decimalCheck = clean.split('.');
            if(!angular.isUndefined(negativeCheck[1])) {
                negativeCheck[1] = negativeCheck[1].slice(0, negativeCheck[1].length);
                clean =negativeCheck[0] + '-' + negativeCheck[1];
                if(negativeCheck[0].length > 0) {
                	clean =negativeCheck[0];
                }

            }

            if(!angular.isUndefined(decimalCheck[1])) {
                decimalCheck[1] = decimalCheck[1].slice(0,8);
                clean =decimalCheck[0] + '.' + decimalCheck[1];
            }

            if (val !== clean) {
              ngModelCtrl.$setViewValue(clean);
              ngModelCtrl.$render();
            }
            return clean;
          });

          element.bind('keypress', function(event) {
            if(event.keyCode === 32) {
              event.preventDefault();
            }
          });
        }
      };
    });

})();
