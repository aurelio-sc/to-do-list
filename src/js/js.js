//Form labels:
document.addEventListener('DOMContentLoaded', function () {
    var inputRows = document.querySelectorAll('.form-row');

    inputRows.forEach(function (row) {
        const input = row.querySelector('.form-input');
        const label = row.querySelector('.form-label');
        if (input && label) {            
            if (input.value.trim() !== '') {
                label.classList.add('ativo');
            }

            input.addEventListener('focus', function () {
                label.classList.add('ativo');
            });

            input.addEventListener('blur', function () {                
                if (input.value.trim() === '') {
                    label.classList.remove('ativo');
                }
            });
            
            input.addEventListener('input', function () {
                if (input.value.trim() !== '') {
                    label.classList.add('ativo');
                } else {
                    label.classList.remove('ativo');
                }
            });
        }
    });
    //Sign In Form:
    var form = document.querySelector('.sign-in-form');
    form.addEventListener('submit', function(event) {        
        event.preventDefault();        
        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();        
        xhr.open('POST', 'user/signin', true);        
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 400) {                
                var result = JSON.parse(xhr.responseText);
                if (result.status === 'success') {
                    alert(result.message);                    
                } else {
                    alert('Erro no login: ' + result.message);
                }
            } else {
                //alert('Erro na solicitação AJAX.');
            }
        };        
        xhr.onerror = function() {
            //alert('Erro na solicitação AJAX.');
        };        
        xhr.send(formData);
    });
});
