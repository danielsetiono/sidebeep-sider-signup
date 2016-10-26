$(document).ready(function(){
    $('#dob').datepicker('option', 'dateFormat', 'dd-mm-yy');




    $('#form').validate({
        rules : {
            firstName : {
                required: true,
                minlength: '3'
            },
            lastName : {
                required: true,
                minlength: '3'
            },
            email : {
                required: true,
                email: true
            },
            gender : 'required',
            dob : 'required',
            phone : 'required',
            nik : 'required',
            skill : 'required',
            tag : 'required',
            role : 'required',
            userImg : 'required',
            ktpImg : 'required',
        },
        messages : {
            firstName : {
                required: 'Nama depan harus dilengkapi',
                minlength: 'Nama depan minimal 3 karakter'
            },
            lastName : {
                required: 'Nama belakang harus dilengkapi',
                minlength: 'Nama belakang minimal 3 karakter'
            },
            email : {
                required: 'Email harus dilengkapi',
                minlength: 'Masukan email yang sesuai'
            },
            gender : 'Jenis Kelamin harus dilengkapi',
            dob : 'Tanggal Lahir harus dilengkapi',
            phone : 'Nomor Telepon harus dilengkapi',
            nik : 'Nomor KTP harus dilengkapi',
            skill : 'Skill harus dilengkapi',
            tag : 'Tag harus dilengkapi',
            role : 'Role harus dilengkapi',
            userImg : 'Gambar harus diunggah',
            ktpImg : 'Gambar harus diunggah',
        }
    });


    $('.form-control').on('input', function() {
        $(this).closest('.form-group').removeClass('has-error');
        $(this).closest('.help-block').remove();
    });

    $('#ref').change(function(){
        if($(this).val() == 1) {
            $('#marketer-form').show();
        } else {
            $('#marketer-form').hide();
        }
    });
});