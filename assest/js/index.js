window.localStorage.setItem("column-user",JSON.stringify(""));
JSON.parse(window.localStorage.getItem("column-user"));

const users = [{
    taikhoan: "danh",
    matkhau:"123"
},{
    taikhoan: "danh",
    matkhau:"123"
}]

var userInput = document.getElementById("tk");
var passwordInput = document.getElementById("mk");
var input = document.getElementById("input");
input.addEventListener("click",()=>{
    for (var user of users)
    {
        if(userInput.value=== user.taikhoan&& passwordInput.value===user.matkhau)
        {
            alert("dang nhap thanh cong");
        }
        else alert("dang nhap khong thanh cong")
    }
})


