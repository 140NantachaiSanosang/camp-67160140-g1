<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
<html>
    <head>
        <title>ส่วนหัว HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {font-family: "Sarabun", sans-serif;}
        </style>
    </head>
    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML - FORM</h1>
                <form>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label for="fname">ชื่อ</label>
                        </div>
                        <div class="col">
                            <input id="fname" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label for="fname">สกุล</label>  
                        </div>
                        <div class="col">
                            <input id="fname" class="form-control" ">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label for="birthdate">วัน/เดือน/ปีเกิด</label>  
                        </div>
                        <div class="col">
                            <input type="date" id="birthdate" name="birthdate" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label for="fname">อายุ</label>  
                        </div>
                        <div class="col">
                            <input id="fname" class="form-control">
                        </div>
                </form>
                <form>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label class="col-form-label font-weight-bold">เพศ</label>
                        </div>

                        <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="male" name="sex" value="MALE">
                            <label class="form-check-label" for="male">ชาย</label>
                        </div>
            
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="female" name="sex" value="FEMALE">
                        <label class="form-check-label" for="female">หญิง</label>
                        </div>
                        </div>
                    </div>
                </form>
                <form>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label class="col">รูป</label>
                        </div>
                        <div class="col">
                            <label for="Picture">Select a file:</label>
                            <input type="file" id="Picture" name="Picture">

                        </div>
                    </div>
                </form>
                <form>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label for="fname">ที่อยู่</label>  
                        </div>
                        <div class="col">
                            <textarea rows="4" cols="40"></textarea>
                        </div>
                    </div>
                </form>
                <form>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label for="fname">สีที่ชอบ</label>  
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example">
                            <option selected>select</option>
                            <option value="red">red</option>
                            <option value="green">green</option>
                            <option value="bluee">blue</option>
                            <option value="yellow">yellow</option>
                            </select>

                        </div>
                    </div>
                </form>
                
                <form>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label for="fname">แนวเพลงที่ชอบ</label>  
                        </div>
                        <div class="col">
                            <input type="checkbox" id="song1" name="song1" value="rock">
                            <label for="color1">ร็อก</label>
                            <input type="checkbox" id="song2" name="song2" value="pop">
                            <label for="color2">ป๊อป</label>
                            <input type="checkbox" id="song3" name="song3" value="looktoong">
                            <label for="song3">ลูกทุ่ง</label>
                        </div>
                    </div>
                </form>

                <form>
                    <div class="row mt-3">
                        <div class="col-4">
                    <input type="checkbox" id="agree" name="agree" value="agree">
                    <label for="agree">ยินยอมให้เก็บข้อมูล</label><br>
                        </div>
                    </div>
                </form>

                <form>
                    <div class="row mt-3">
                        <div class="col-4">
        
                        </div>
                        <div class="col">
                            <input type="reset" value="Reset" class="btn btn-warning">
                            <input type="submit" value="Submit" class="btn btn-success">

                        </div>
                    </div>
                </form>
        </div>
    </body>
</html>
