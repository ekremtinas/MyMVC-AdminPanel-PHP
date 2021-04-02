$(function () {
    $(".lds-ellipsis").show();//Loading'in gösterilmesi.
    let promiseAjax = new Promise(function (resolve, reject) {//Verilerin getirildiği promise
        $.ajax({//Verilerin getirildiği ajax
            url: "?url=admins-list",
            type: "GET",
            dataType: "json",
            success: function (dataUsers) {
                console.log(JSON.parse(dataUsers))
                resolve(dataUsers);//Kullanıcılar burda resolve ile then fonksiyonuna gönderiliyor.
                reject();
            }
        });
    });
    promiseAjax.then((dataUsers) => {//Ajax promise'i beklendi be ondan sonra olacak işlemler içeride olacak
        let dataUsersArray= JSON.parse(dataUsers);
        let promiseGrid = new Promise(function (resolve, reject) {//JsGrid'in configure edilmesi de beklenmesi gereken bi durum bu yüzden yeni bir promise oluşturuldu.
            resolve();
            reject();
            $("#adminGrid").jsGrid({//Jsgrid oluşturuluyor.
                height: "auto",
                width: "100%",//Genişlik
                autoload:true,
                inserting: true,//Eklenebilirlik sağlandı
                sorting: true,//Sıralanabilirlik sağlandı.
                paging: true,//Sayfalanma ancak şuan çalışmıyor.
                filtering: true,//Filtrelenebilirlik
                data:dataUsersArray,//Grid'e yüklenen data
                controller: {
                    loadData: function (filter) {//Yüklenecek dataya filtreli veri gönderiyoruz
                        if(filter.id!=""||filter.email!="" || filter.userType!=""  || filter.password!="" || filter.roles!="")
                        {
                            let filterdData= _.filter(dataUsersArray, function(o) { if (o.id.includes(filter.id)&&o.email.includes(filter.email) && o.userType.includes(filter.userType)  && o.password.includes(filter.password) && o.roles.includes(filter.roles)) {return true;} });
                            return filterdData;
                        }
                        else {
                            return dataUsersArray;
                        }
                    },
                },
                pageSize: 15,
                pageButtonCount: 5,
                editItem: function (item) {//Edit butonuna tıklandıktan sonra oluşacak işlemler.
                    var editModal = $("#modal-edit-admin");//Edit Modal'ı değişkene atılıyor.
                    $("#userId").val(item.id);//EditItemden gelen veriler Modal içerisinde ki ınputlara yazdırılıyor.
                    $("#userEmail").val(item.email);//EditItemden gelen veriler Modal içerisinde ki ınputlara yazdırılıyor.
                    $("#userPass").val(item.password);//EditItemden gelen veriler Modal içerisinde ki ınputlara yazdırılıyor.
                    userTypeSelect(item.userType);//UserType'e göre Select içeriği seçiliyor.



                    editModal.modal('show');//Edit Modal gösteriliyor.
                },
                deleteItem: function (deleteItem) {//Delete butonuna tıklandıktan sonra oluşacak işlemler.
                    let deleteConfirmText = $('#deleteConfirmText');//Delete modal'da email'in gösteerilmesi için kullanılan div değişkene atılıyor.
                    deleteConfirmText.html(deleteItem.userEmail);//Modal içerisinde ki div 'in içeriği item ile gelen veri ile dolduruluyor.
                    deleteConfirmText.data('id', deleteItem.userId);//Div'in data id'si gelen item ile doldurulacak.
                    $("#modal-delete-admin").modal("show");//Delete modal gösteriliyor.

                },
                fields: [//Grid'in Field'ları yani alan adları yapılandırılıor.
                    {name: "id", title: "Id", type: "text", width: 20, headercss: "bg-dark" },
                    {name: "email",title: "E Mail",type: "text" ,width: 200,headercss: "bg-dark"  },
                    {name: "password",title: "Password",type: "text",width: 40,headercss: "bg-dark"  },
                    {name: "roles",title: "Roles",type: "text",width: 40,headercss: "bg-dark"  },
                    {name: "userType",title: "UserType",type: "text",width: 40,headercss: "bg-dark"  },


                    {type: "control", headercss: "bg-dark add-class "}
                ]


            });
        });

            //Admin Ekleme
            $("#admin-add-form").submit(function (e) {//Modal içerisinde ki form submit edildiğinde çalışacak ajax.
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    dataType:"json"
                }).done(function (data) {
                   console.log(data)
                    if (data.status == 'true') {
                         // dataUsers.push(data);
                         // $("#adminGrid").jsGrid("refresh");
                          toastr.success(data.message);
                          $("#modal-add-admin").modal('hide');
                     } else {
                        toastr.error(data.message);
                      }
                });
            });


            //Admin Güncelleme
            $("#admin-edit-form").submit(function (e) {//Modal içerisinde ki form submit edildiğinde çalışacak ajax.
                var editModal = $("#modal-edit-admin");
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    dataType: "JSON"
                }).done(function (data) {


                   /*/ if (data.userId != null) {
                        let userIdForm=$('#admin-edit-form #userId').val();
                        for (var key in dataUsers) {
                            if(dataUsers[key].id==userIdForm)
                            {
                                dataUsers[key]=data;
                                break;
                            }
                        }*/
                        $("#adminGrid").jsGrid("refresh");
                        toastr.success("User succesfuly updated");
                        editModal.modal('hide');
                 /*   } else {

                        toastr.error('User not succesfuly updated');

                    }*/

                });
            });
            //Admin Silme
            $("#admin-delete-form").submit(function (e) {//Modal içerisinde ki form submit edildiğinde çalışacak ajax.
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                let dataUserId = $('#deleteConfirmText').data('id');
                let isActiveGrid = $(".isActiveGrid");
                $.ajax({
                    type: "POST",
                    url: url,
                    data:
                        {
                            userId: dataUserId,
                            userEmail: $('#deleteConfirmText').text(),
                            _token: $('#admin-delete-form input[name="_token"]').val()
                        },
                    success: function (data) {
                        data = JSON.parse(data);
                        if (data.status == "true") {

                            toastr.success(data.message);
                        } else {

                            toastr.error(data.message);
                        }
                        $("#modal-delete-admin").modal("hide");
                    }
                });
            });


        promiseGrid.then(() => {//Burda promise kullanılma class'a event eklemektir.Grid'in oluşmasını beklemek gerekir.

                $(".jsgrid-mode-button").on("click", () => {
                    let userRightsAdd = ' [{"suppliers":[{"DOYEN": false, "MP NEDERLAND": false,"ALDOC": false,"SATOR": false,"AUTOPARTNER": false,"VDB": false}],"catalog":[{"ALDOC": false, "TECDOC": false,"PSCAT": false,"SALTO": false}]}]';
                    $("#modal-add-admin").modal("show");
                });

                $(".lds-ellipsis").toggle("hide");//Loading gizlenişi
            }
        );

    });







    function userTypeSelect(userTypeId) {
        let userType = $('#userType option');
        userType.each((key, item) => {
            if (item.value == userTypeId) { $(item).attr("selected", "true"); }
        });

    }


    userTypeSelectCreate();
    function userTypeSelectCreate() {
        let userType = $('.userType');
        for (let i = 1; i <= 4; i++) {
            if (i == 1) userType.append('<option value="' + i + '">Admin</option>')
            else if (i == 2) userType.append('<option value="' + i + '">Suppliers</option>')
            else if (i == 3) userType.append('<option value="' + i + '">Stajyer</option>')
            else if (i == 4) userType.append('<option value="' + i + '">Customer</option>')
        }

    }

    passwordEye();
    function passwordEye() {
        let passwordEyeBtn = $(".passwordEyeBtn");
        let passwordEye = $(".passwordEye");
        let passwordInput = $(".password");
        let changeBool = false;
        passwordEyeBtn.on("click", () => {
            if (changeBool == false) {
                passwordEye.removeClass("fa-eye").addClass("fa-eye-slash");
                passwordInput.attr("type", "text");

                changeBool = true;
            } else {
                passwordEye.removeClass("fa-eye-slash").addClass("fa-eye");
                passwordInput.attr("type", "password");
                changeBool = false;

            }
        });
    }




});


$(document).ready(function () {

    $('#admin-add-form').bValidator();
    $('#admin-edit-form').bValidator();
});