@extends('template.default')
@section('title', 'Workshop FORM')
@section('content')

<h1>Workshop #HTML - FORM</h1>
<form method="post" action="/regis">
    @csrf


    <div class="row mt-3">
        <div class="col-4">
            <label for="fname">ชื่อ</label>
        </div>
        <div class="col">
            <input id="fname" name="fname" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุชื่อ</div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-4">
            <label for="lname">สกุล</label>
        </div>
        <div class="col">
            <input id="lname" name="lname" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุสกุล</div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-4">
            <label for="birthdate">วัน/เดือน/ปีเกิด</label>
        </div>
        <div class="col">
            <input type="date" id="birthdate" name="birthdate" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุวันเกิด</div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-4">
            <label for="age">อายุ</label>
        </div>
        <div class="col">
            <input id="age" name="age" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุอายุ</div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-4">
            <label class="col-form-label font-weight-bold">เพศ</label>
        </div>
        <div class="col-4">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="male" name="sex" value="MALE">
                <label class="form-check-label" for="male">ชาย</label>
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">โปรดระบุเพศ</div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="female" name="sex" value="FEMALE">
                <label class="form-check-label" for="female">หญิง</label>
            </div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-4">
            <label class="col">รูป</label>
        </div>
        <div class="col">
            <label for="picture">Select a file:</label>

            <input type="file" id="Picture" name="picture" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดเลือกรูป</div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-4">
            <label for="address">ที่อยู่</label>
        </div>
        <div class="col">
            <textarea id="address" name="address" rows="4" cols="40" class="form-control"></textarea>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุที่อยู่</div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-4">
            <label for="color">สีที่ชอบ</label>
        </div>
        <div class="col">
            <select id="color" name="color" class="form-select">
                <option value="" selected>select</option>
                <option value="red">red</option>
                <option value="green">green</option>
                <option value="bluee">blue</option>
                <option value="yellow">yellow</option>
            </select>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดเลือกสีที่ชอบ</div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-4">
            <label for="song">แนวเพลงที่ชอบ</label>
        </div>
        <div class="col">
            <div class="form-check form-check-inline">
                <input type="checkbox" id="song1" name="song1" value="rock" class="form-check-input">
                <label class="form-check-label" for="song1">ร็อก</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" id="song2" name="song2" value="pop" class="form-check-input">
                <label class="form-check-label" for="song2">ป๊อป</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" id="song3" name="song3" value="looktoong" class="form-check-input">
                <label class="form-check-label" for="song3">ลูกทุ่ง</label>
            </div>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดเลือกแนวเพลงที่ชอบ</div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-4"></div>
        <div class="col">
            <div class="form-check">
                <input type="checkbox" id="agree" name="agree" value="agree" class="form-check-input">
                <label class="form-check-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
                <div class="invalid-feedback">โปรดยินยอมให้เก็บข้อมูล</div>
            </div>
        </div>
    </div>


    <div class="row mt-3 mb-5">
        <div class="col-4"></div>
        <div class="col">
            <input type="reset" value="Reset" class="btn btn-warning">

            <button type="submit" class="btn btn-success" onclick="clickMe()">Submit</button>
        </div>
    </div>

</form>

@endsection
                @push('scripts')
                    <script>
                        let clickMe = function(){
                            let fname = document.getElementById('fname');


                            if(fname.value == ""){
                                fname.classList.remove('is-valid');
                                fname.classList.add('is-invalid');
                            }else{
                                fname.classList.remove('is-invalid');
                                fname.classList.add('is-valid');
                            }

                        let lname = document.getElementById('lname');
                            if(lname.value == ""){
                                lname.classList.remove('is-valid');
                                lname.classList.add('is-invalid');
                            }else{
                                lname.classList.remove('is-invalid');
                                lname.classList.add('is-valid');
                            }

                        let birthdate = document.getElementById('birthdate');
                            if(birthdate.value == ""){
                                birthdate.classList.remove('is-valid');
                                birthdate.classList.add('is-invalid');
                            }else{
                                birthdate.classList.remove('is-invalid');
                                birthdate.classList.add('is-valid');
                            }


                        let age = document.getElementById('age');
                            if(age.value == ""){
                                age.classList.remove('is-valid');
                                age.classList.add('is-invalid');
                            }else{
                                age.classList.remove('is-invalid');
                                age.classList.add('is-valid');
                            }

                        let male = document.getElementById('male');
                        let female = document.getElementById('female');
                            if(!male.checked && !female.checked){
                                male.classList.add('is-invalid');
                                female.classList.add('is-invalid');
                            }else{
                                male.classList.remove('is-invalid');
                                female.classList.remove('is-invalid');
                            }

                            let picture = document.getElementById('picture');
                            if(picture.value == ""){
                                picture.classList.remove('is-valid');
                                picture.classList.add('is-invalid');
                            }else{
                                picture.classList.remove('is-invalid');
                                picture.classList.add('is-valid');
                            }


                            let address = document.getElementById('address');
                            if(address.value == ""){
                                address.classList.remove('is-valid');
                                address.classList.add('is-invalid');
                            }else{
                                address.classList.remove('is-invalid');
                                address.classList.add('is-valid');
                            }

                            let color = document.getElementById('color');
                            if(color.value == ""){
                                color.classList.remove('is-valid');
                                color.classList.add('is-invalid');
                            }else{
                                color.classList.remove('is-invalid');
                                color.classList.add('is-valid');
                            }

                            let song1 = document.getElementById('song1');
                            let song2 = document.getElementById('song2');
                            let song3 = document.getElementById('song3');
                            if(!song1.checked && !song2.checked && !song3.checked){
                                song1.classList.add('is-invalid');
                                song2.classList.add('is-invalid');
                                song3.classList.add('is-invalid');
                            }else{
                                song1.classList.remove('is-invalid');
                                song2.classList.remove('is-invalid');
                                song3.classList.remove('is-invalid');
                            }

                            let agree = document.getElementById('agree');
                            if(!agree.checked){
                                agree.classList.add('is-invalid');
                            }else{
                                agree.classList.remove('is-invalid');
                        }
                    }


                        let myfunc = (callback) =>{
                            callback("in Callback")
                        }
                        callMe = (param)=>{
                            console.log(param);

                        }
                        myfunc(callMe)

                        let myvar1 = 1
                        let myvar2 ="1"
                        myvar2 = parseInt(myvar2)


                        console.log(myvar2 + myvar1)

                    </script>
                @endpush
