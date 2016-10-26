@extends('layouts.master')
@section('content')
    <div class="panel panel-default panel-form">

        <div class="panel-body">
            {!! Form::open(['url' => 'sider-registration', 'method' => 'POST', 'files' => true,'id' =>'form']) !!}
            <div class="form-group">
                <label for="firstName" class ="control-label">Nama Depan</label>
                <input type="text" name ="firstName" class="form-control" id="firstName" value ="{{ old('firstName') }}" placeholder="John">
            </div>
            <div class="form-group @if($errors->has('lastName')) has-error @endif">
                <label for="lastName ">Nama Belakang</label>
                <input type="text" name ="lastName" class="form-control" id="lastName" value ="{{ old('lastName') }}" placeholder="Doe">
                @if($errors->has('lastName'))
                    <span class ="help-block"> {{$errors->first('lastName')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select class ="form-control" name ="gender" id ="gender">
                    <option value ="male" @if(old('gender') == 'male') selected @endif>Laki - Laki</option>
                    <option value ="female" @if(old('gender') == 'female') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="form-group @if($errors->has('email')) has-error @endif">
                <label for="email">Email</label>
                <input type="email" name ="email" class="form-control" value ="{{ old('email') }}" id="email" placeholder="emailsaya@mail.com">
                @if($errors->has('email'))
                    <span class ="help-block"> {{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group @if($errors->has('dob')) has-error @endif">
                <label for="dob">Tanggal Lahir (Sesuai KTP)</label>
                <input type="text" name ="dob" value ="{{ old('dob') }}" class="form-control" id="dob" placeholder="1/1/1990">
                @if($errors->has('dob'))
                    <span class ="help-block"> {{$errors->first('dob')}}</span>
                @endif
            </div>
            <div class="form-group @if($errors->has('phone')) has-error @endif">
                <label for="phone">Telepon Seular (+62)</label>
                <input type="text" name ="phone" class="form-control" value ="{{ old('phone') }}" id="phone" placeholder="+6282932993229">
                @if($errors->has('phone'))
                    <span class ="help-block"> {{$errors->first('phone')}}</span>
                @endif
            </div>
            <hr>
            <div class="form-group">
                <label for="city">Kota Pendaftaran</label>
                <select class ="form-control" name ="city" id ="city">
                    @foreach($cities as $city)
                        <option value ="{{ $city->id }}" @if(old('city') ==  $city->id) selected @endif>{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group @if($errors->has('nik')) has-error @endif">
                <label for="nik">NIK (Nomor KTP) / Passport</label>
                <input type="text" name ="nik" class="form-control" value ="{{ old('nik') }}" id="nik" placeholder="317201230099882">
                @if($errors->has('nik'))
                    <span class ="help-block"> {{$errors->first('nik')}}</span>
                @endif
            </div>
            <div class="form-group @if($errors->has('npwp')) has-error @endif">
                <label for="npwp">No. NPWP</label>
                <input type="text" name ="npwp" class="form-control" id="npwp" value ="{{ old('npwp') }}" placeholder="12.345.654.5-789.000">
                @if($errors->has('npwp'))
                    <span class ="help-block"> {{$errors->first('npwp')}}</span>
                @endif
            </div>
            <hr>
            <div class="form-group @if($errors->has('skill')) has-error @endif">
                <label for="skill">Daftar Kemampuan/Talenta/Skill Unik Yang Dimiliki Untuk Kamu Marketkan!</label>
                <textarea class="form-control" name = "skill" rows="5" id="skill" placeholder="contoh: Make Up Artist, Teman Olahraga Berlari, Jasa Gunting Rambut Ke Rumah, Belajar Ngaji Bareng, Pelatih Skateboard, Pelatih Ice Skating, Belajar Fotografi Bersama, Guru Les Matematika, Jasa Dog Grooming, dan lainnya sekreatifnya kamu!">{{ old('skill') }}</textarea>
                @if($errors->has('skill'))
                    <span class ="help-block"> {{$errors->first('skill')}}</span>
                @endif
            </div>
            <div class="form-group @if($errors->has('tag')) has-error @endif">
                <label for="tag">Daftar Tag Kemampuan/Talenta/Skill Yang Ingin Kamu Tulis </label>
                <textarea class="form-control" name = "tag" rows="5" id="tag" placeholder = "contoh tag: skateboard, pelatih skateboard, fun, skateboard trainer, dll...">{{ old('tag') }}</textarea>
                @if($errors->has('tag'))
                    <span class ="help-block"> {{$errors->first('tag')}}</span>
                @endif
            </div>
            <div class="form-group @if($errors->has('role')) has-error @endif">
                <label for="role">Daftar Role Playing-Service Yang Ingin Kamu Marketkan (Judul Servis Kamu)</label>
                <textarea class="form-control" name = "role" rows="5" id="role" placeholder="contoh: Make Up Artist, Teman Olahraga Berlari, Jasa Gunting Rambut Ke Rumah, Belajar Ngaji Bareng, Pelatih Skateboard, Pelatih Ice Skating, Belajar Fotografi Bersama, Guru Les Matematika, Jasa Dog Grooming, dan lainnya sekreatifnya kamu!">{{ old('role') }}</textarea>
                @if($errors->has('role'))
                    <span class ="help-block"> {{$errors->first('role')}}</span>
                @endif
            </div>
            <hr>
            <input type ="file" name ="a" accept="image/*; capture=camera">
            <div class="form-group @if($errors->has('userImg')) has-error @endif">
                <label for="userImg">Upload Foto Tampak Muka Depan Anda</label>
                <input id="userImg" type="file" name ="userImg" class="file">
                @if($errors->has('userImg'))
                    <span class ="help-block"> {{$errors->first('userImg')}}</span>
                @endif
            </div>
            <div class="form-group @if($errors->has('ktpImg')) has-error @endif">
                <label for="ktpImg">Upload Foto KTP Anda</label>
                <input id="ktpImg" type="file" name ="ktpImg" class="file">
                @if($errors->has('ktpImg'))
                    <span class ="help-block"> {{$errors->first('ktpImg')}}</span>
                @endif
            </div>
            <hr>
            <div class="form-group">
                <label for="ref">Anda Mengetahui Sidebeep Via</label>
                <select class ="form-control" name ="ref" id ="ref">
                    @foreach($refs as $ref)
                        <option value ="{{ $ref->id }}" value ="{{ old('ref') }}">{{ $ref->description }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" id ="marketer-form">
                <label for="marketer">Sidebeep Marketer</label>
                <select class ="form-control" name ="marketer" id ="marketer" value ="{{ old('marketer') }}">
                    @foreach($marketers as $marketer)
                        <option value ="{{ $marketer->id }}">{{ $marketer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="university">Nama Universitas Anda (Apabila Mahasiswa)</label>
                <input type="text" name ="university" value ="{{ old('university') }}"class="form-control" id="university" placeholder="Universitas Indonesia">
            </div>
            <div class ="form-group">
                <label>Terms and Condition</label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name ="agree"> Saya setuju dan tunduk dengan kebijakan privasi, kebijakan kondisi, dan kebijakan kemitraan (sebagai Sider) untuk menggunakan applikasi sidebeep (anda dapat membaca di sini )
                </label>
            </div>
            @if($errors->has('agree'))
                <span class ="help-block error"> {{$errors->first('agree')}}</span>
            @endif
            <div class ="form-group">
                <button type="submit" class="btn btn-success">Submit</button>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection