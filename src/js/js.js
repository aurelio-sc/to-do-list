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
        xhr.open('POST', form.getAttribute('action'), true);        
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 400) {                
                var result = JSON.parse(xhr.responseText);
                if (result.status === 'success') {
                    if(confirm(result.message)) {
                        if (result.redirect) {
                            window.location.href = result.redirect;
                        }
                    }

                } else {
                    alert(result.message);
                }
            } else {
                //alert('AJAX error.');
            }
        };        
        xhr.onerror = function() {
            //alert('AJAX error.');
        };        
        xhr.send(formData);
    });
});

