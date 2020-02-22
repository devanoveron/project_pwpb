// var edit = document.getElementById('editsurat');
// edit.addEventListener('click',function(e){
//     document.getElementById('judulpopup').innerHTML='Ubah Data Surat';
//     document.getElementById('tombolpopup').innerHTML='Ubah Data';
//     $.ajax({
//         url:'http://localhost/persuratan_skensa/OOP_skensa/public/suratmasuk/getubah',
//         data:{id:id},
//         method:'post',
//         dataType:'json',
//         success: function (data){
//             console.log(data);
//         }
//     });
// });

function checkAll(tes) {
    var checkboxes = document.getElementsByTagName("input");
    if (tes.checked) {
        for (var i = 1; i <= checkboxes.length + 1; i++) {
            if (checkboxes[i].type == 'checkbox' ) {
                checkboxes[i].checked = true;
            }
        }
    } else {
        for (var i = 1; i <= checkboxes.length + 1; i++) {
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = false;
            }
        }
    }
}


var masuk = document.querySelector('.kotaksuratmasuk');
masuk.addEventListener('mouseover',function(e){
    document.querySelector('#iconmasuk').style.fontSize='85px';
});
masuk.addEventListener('mouseout',function(e){
    document.querySelector('#iconmasuk').style.fontSize='80px';
});
var keluar = document.querySelector('.kotaksuratkeluar');
keluar.addEventListener('mouseover',function(e){
    document.querySelector('#iconkeluar').style.fontSize='85px';
});
keluar.addEventListener('mouseout',function(e){
    document.querySelector('#iconkeluar').style.fontSize='80px';
});