@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('employees.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="login" >Логин<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                    <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" minlength="2" maxlength="20" value="{{ old('login') }}" required  placeholder="Логин">
                                    @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="email" >Почта<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" minlength="2" maxlength="191" required  placeholder="Email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="password" >Пароль<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" minlength="8" maxlength="16" required  placeholder="Пароль">
                                        <p id="capsWarning" style="color: red; display: none;">Внимание! Caps lock включен.</p>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="password_confirmation" >Подтвердите пароль<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required  placeholder="Подтвердите пароль">
                                        <p id="capsWarning2" style="color: red; display: none;">Внимание! Caps lock включен.</p>
                                    </div>
                                </div>

                                <script>

                                    // Получить поле ввода
                                        var input = document.getElementById("password");
                                        var input2 = document.getElementById("password-confirm");
            
                                        // Получить текст предупреждения
                                        var text = document.getElementById("capsWarning");
                                        var text2 = document.getElementById("capsWarning2");
            
                                        // Когда пользователь нажимает любую клавишу на клавиатуре, запустите функцию
                                        input.addEventListener("keyup", function(event) {
            
                                        // Если "caps lock" нажат, отобразится текст предупреждения
                                        if (event.getModifierState("CapsLock")) {
                                            text.style.display = "block";
                                            text2.style.display = "block";
                                        } else {
                                            text.style.display = "none"
                                            text2.style.display = "none";
                                        }
                                        });
        
                                        input2.addEventListener("keyup", function(event) {
            
                                        // Если "caps lock" нажат, отобразится текст предупреждения
                                        if (event.getModifierState("CapsLock")) {
                                            text.style.display = "block";
                                            text2.style.display = "block";
                                        } else {
                                            text.style.display = "none"
                                            text2.style.display = "none";
                                        }
                                        });
                                        
                                </script>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Surname" >Фамилия<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input  type="text" class="form-control @error('Surname') is-invalid @enderror" name="Surname" value="{{ old('Surname') }}" minlength="2" maxlength="50" required  placeholder="Фамилия">
                                        @error('Surname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Name" >Имя<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input  type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{ old('Name') }}" minlength="2" maxlength="50" required  placeholder="Имя">
                                        @error('Name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Middle_Name" >Отчество</label>
                                    <div class="col-lg-6">
                                        <input  type="text" class="form-control @error('Middle_Name') is-invalid @enderror" name="Middle_Name" value="{{ old('Middle_Name') }}" minlength="2" maxlength="50" placeholder="Отчество">
                                        @error('Middle_Name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Byrthday" >Дата рождения<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input  type="text" class="form-control @error('Byrthday') is-invalid @enderror" id="Byrthday" name="Byrthday" value="{{ old('Byrthday') }}" placeholder="Дата рождения" required>
                                        @error('Byrthday')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Phone_Number" >Телефон<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input  type="tel" class="form-control @error('Phone_Number') is-invalid @enderror" name="Phone_Number" id="Phone_Number" value="{{ old('Phone_Number') }}" placeholder="Телефон" required>
                                        @error('Phone_Number')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Description" >Описание</label>
                                    <div class="col-lg-6">
                                        <textarea  type="text" class="form-control @error('Description') is-invalid @enderror" name="Description" id="Description" placeholder="Описание">{{ old('Description') }}</textarea>
                                        @error('Description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row" id="Set_Permission_hidden" hidden>
                                    <label class="col-lg-4 col-form-label" for="Man_brought" >Человек приведено</label>
                                    <div class="col-lg-6">
                                        <input  type="number" class="form-control @error('Man_brought') is-invalid @enderror" min="0" max="2147483647" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" value="{{ old('Joint_excursions') }}" name="Man_brought" id="Man_brought" placeholder="Человек приведено">
                                        @error('Man_brought')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Joint_excursions" >Совместных мероприятий</label>
                                    <div class="col-lg-6">
                                        <input  type="number" class="form-control @error('Joint_excursions') is-invalid @enderror" min="0" max="2147483647" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" name="Joint_excursions" id="Joint_excursions" value="{{ old('Joint_excursions') }}" placeholder="Совместных мероприятий">
                                        @error('Joint_excursions')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Level">Уровень</label>
                                    <div class="col-lg-6">
                                        <input  type="number" class="form-control @error('Level') is-invalid @enderror" min="0" max="10" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" name="Level" id="Level" value="{{ old('Level') }}" placeholder="Уровень">
                                        @error('Level')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Contract_Employee">Договор</label>
                                    <div class="col-lg-6">
                                        <div class="custom-file">
                                            <input type="file" name="Contract_Employee" accept=".txt,.pdf,.docx,.docm,.doc,.xls,.xml,.xlsx,.xlsm" onchange="
                                        switch (this.value.match(/\.([^\.]+)$/)[1]) {
                                            case 'txt':
                                            case 'pdf':
                                            case 'docx':
                                            case 'docm':
                                            case 'doc':
                                            case 'xls':
                                            case 'xml':
                                            case 'xlsx':
                                            case 'xlsm':
                                            document.getElementById('Fille_Conract_Partners').textContent= this.files.item(0).name;
                                                break;
                                            default:
                                                alert('Файл не подходит!');
                                                this.value = 'Некорректный файл';
                                                break;
                                        }
                                            " class="custom-file-input">
                                            <label id="Fille_Conract_Partners" for="Contract_Employee" class="custom-file-label">Файл не выбран</label>
                                        </div>
                                        @error('Contract_Employee')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Photo">Фото</label>
                                    <div class="col-lg-6">
                                        <div class="custom-file">
                                            <input type="file" name="Photo" accept=".jpg,.png" onchange="
                                        switch (this.value.match(/\.([^\.]+)$/)[1]) {
                                            case 'png':
                                            case 'jpg':
                                            document.getElementById('Fille_Conract_Partners').textContent= this.files.item(0).name;
                                                break;
                                            default:
                                                alert('Файл не подходит!');
                                                this.value = 'Некорректный файл';
                                                break;
                                        }
                                            " class="custom-file-input">
                                            <label id="Fille_Conract_Partners" for="Photo" class="custom-file-label">Файл не выбран</label>
                                        </div>
                                        @error('Photo')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="jobs_id" >Должность<span class="text-danger">*</span></label>
                                    <div class="col-lg-6 input-group">
                                        <select class="custom-select @error('jobs_id') is-invalid @enderror" id="jobs_id" name="jobs_id" onchange="change_job()" required>
                                            <option value="0" disabled selected hidden>Должность</option>
                                            @foreach($jobs as $job)
                                                <option value="{{ $job->id }}" id="{{ $job->id }}" @if(old('jobs_id') == $job->id) selected @endif>{{$job->Company}} {{ $job->Job_Title}} зп: {{( ($job->Salary == null)? 'договорная': number_format($job->Salary, 0, ',', ' ') . '₽')}} </option>
                                                @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <a  data-toggle="modal" data-target="#addArticle" class="btn input-group-text selectedbutton" style="color: #495057;" title="Добавить"><i class="fa fa-plus-circle color-muted m-r-5"></i></a>
                                        </div>
                                        <div class="input-group-append">
                                            <a class="btn input-group-text selectedbutton diableddeletedbutton" data-toggle="modal" data-target="#addArticle1" id="updatebutton" style="" name="updatebutton" title="Изменить"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                        </div>
                                        @error('jobs_id')
                                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="modal fade" id="addArticle1" tabindex="-1" role="dialog" aria-labelledby="addArticleLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="addArticleLabel">Изменение должности</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="Job_Title1">Название должности <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('Job_Title') is-invalid @enderror" id="Job_Title1" minlength="2" maxlength="191" name="Job_Title1" placeholder="Название">
                                                    @error('Job_Title1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="Salary1">Зарплата</label>
                                                    <input type="number" class="form-control @error('Salary') is-invalid @enderror" id="Salary1" min="0" max="2147483647" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" name="Salary1" placeholder="Зарплата ₽">
                                                    @error('Salary1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="Company1">Название компании</label>
                                                    <input type="text" class="form-control @error('Company') is-invalid @enderror" id="Company1" minlength="2" maxlength="191" name="Company1" placeholder="Компания">
                                                    @error('Company1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" id="delete" name="delete" data-dismiss="modal">Удалить</button>
                                                <button type="button" id="ubdate" name="ubdate" class="btn btn-primary">Изменить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="addArticle" tabindex="-1" role="dialog" aria-labelledby="addArticleLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="addArticleLabel">Добавление должности</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="Job_Title">Название должности <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('Job_Title') is-invalid @enderror" minlength="2" maxlength="191" name="Job_Title" id="Job_Title" placeholder="Название">
                                                    @error('Job_Title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="Salary">Зарплата</label>
                                                    <input type="number" class="form-control @error('Salary') is-invalid @enderror" min="0" max="2147483647" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" name="Salary" id="Salary" placeholder="Зарплата ₽">
                                                    @error('Salary')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="Company">Название компании</label>
                                                    <input type="text" class="form-control @error('Company') is-invalid @enderror" id="Company" minlength="2" name="Company" maxlength="191" placeholder="Компания">
                                                    @error('Company')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" id="close" name="close" data-dismiss="modal">Закрыть</button>
                                                <button type="button" id="save" name="save" class="btn btn-primary">Сохранить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function Set_Permission_hidden_Shenge(value){
                                        if(value == 0){
                                            Set_Permission_hidden.hidden = true;
                                            Man_brought.value = '';
                                        }
                                            else
                                            Set_Permission_hidden.hidden = false;
                                    };

                                    function change_job(i) {
                                        // если значение не равно пустой строке
                                        var updatebutton = document.querySelector("#updatebutton")
                                        if($('#jobs_id').val() == "0" || i == 0) {
                                            updatebutton.classList.add("diableddeletedbutton");
                                        } else {
                                            updatebutton.classList.remove("diableddeletedbutton");
                                        }
                                    };

                                    $(function() {
                                        if(Set_Permission.value == 0){
                                            Set_Permission_hidden.hidden = true;
                                            Man_brought.value = '';
                                        }
                                        else
                                            Set_Permission_hidden.hidden = false;

                                        $("#save").on('click',function(){
                                            var Job_Title = $('#Job_Title').val();
                                            var Salary = $('#Salary').val();
                                            var Company = $('#Company').val();

                                            $.ajax({
                                                url: '{{ route('job.store') }}',
                                                type: "POST",
                                                data: {Job_Title:Job_Title,Salary:Salary,Company:Company },
                                                headers: {
                                                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                                                },
                                                success: function (data) {
                                                    $('#Job_Title').val('');
                                                    $('#Salary').val('');
                                                    $('#Company').val('');
                                                    $('#addArticle').modal('hide');
                                                    $('#articles-wrap').removeClass('hidden').addClass('show');
                                                    $('.alert').removeClass('show').addClass('hidden');
                                                    var str = '<option value="'+data['id']+'" selected>'+ data['String']+'</option>';
                                                    $('#jobs_id:last').append(str);
                                                    document.querySelector("#updatebutton").classList.remove("diableddeletedbutton");
                                                    alert('Добавлено');
                                                },
                                                error: function (msg) {
                                                    alert('Ошибка: заполните обязательные для ввода поля или данная запись уже существует.');
                                                }
                                            });
                                        });

                                        $('#updatebutton').on('click',function(){
                                            var jobsid = $('#jobs_id').val();

                                            $.ajax({
                                                url: "{{route('job.index')}}",
                                                type: "POST",
                                                data: {jobsid:jobsid},
                                                headers: {
                                                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                                                },
                                                success:function (data)
                                                {
                                                    $('#Company1').val(((data['Company'] == null) ? '' :data['Company']));
                                                    $('#Job_Title1').val(data['Job_Title']);
                                                    $('#Salary1').val(data['Salary']);
                                                },
                                                error: function (msg) {
                                                    alert('Ошибка');
                                                }
                                            });
                                        });

                                        $('#ubdate').on('click',function(){
                                            var jobsid = $('#jobs_id').val();
                                            var Job_Title1 = $('#Job_Title1').val();
                                            var Salary1 = $('#Salary1').val();
                                            var Company1 = $('#Company1').val();

                                            $.ajax({
                                                url: "{{route('job.update')}}",
                                                type: "POST",
                                                data: {jobsid:jobsid,Job_Title:Job_Title1,Salary:Salary1,Company:Company1},
                                                headers: {
                                                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                                                },
                                                success:function (data)
                                                {
                                                    $('#addArticle1').modal('hide');
                                                    $('#articles-wrap').removeClass('hidden').addClass('show');
                                                    $('.alert').removeClass('show').addClass('hidden');
                                                    document.getElementById('jobs_id').options[document.getElementById('jobs_id').selectedIndex].text = data['String'];
                                                    alert('Изменено');
                                                },
                                                error: function (msg) {
                                                    alert('Ошибка: заполните обязательные для ввода поля или данная запись уже существует.');
                                                }
                                            });
                                        });

                                        $('#delete').on('click',function(){
                                            var jobsid = $('#jobs_id').val();

                                            $.ajax({
                                                url: "{{route('job.destroy')}}",
                                                type: "POST",
                                                data: {jobsid:jobsid},
                                                headers: {
                                                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                                                },
                                                success:function (datas)
                                                {
                                                    jobs_id.removeChild(jobs_id.querySelector('[value="'+ jobsid +'"]'));
                                                    $('#jobs_id').val('0');
                                                    change_job(0);
                                                    alert('Удалено');

                                                },
                                                error: function (msg) {
                                                    alert('Ошибка');
                                                }
                                            });
                                        });
                                    })
                                </script>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Type_User" >Права<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <select class="custom-select mr-sm-2" id="Type_User" name="Type_User" required>
                                            <option value="" disabled selected hidden>Права</option>
                                            <option value="0"  @if(old('Type_User') == 0) selected @endif>Без прав</option>
                                            <option value="1" @if(old('Type_User') == 1) selected @endif>С правами</option>
                                        </select>
                                        @error('Type_User')
                                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Set_Permission" >Разрешение на набор</label>
                                    <div class="col-lg-6">
                                        <select class="custom-select mr-sm-2" id="Set_Permission" onchange="Set_Permission_hidden_Shenge(this.value)" name="Set_Permission">
                                            <option value="" disabled selected hidden>Рашрешение</option>
                                            <option value="0" @if(old('Set_Permission') == 0) selected @endif>Отсуствует</option>
                                            <option value="1" @if(old('Set_Permission') == 1) selected @endif>Присуствует</option>
                                        </select>
                                        @error('Set_Permission')
                                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <script>
                                    $(function() {
                                        $("#Phone_Number").mask("+7 (999) 999-99-99");
                                        $("#Byrthday").mask("99-99-9999");
                                    });
                                </script>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Type_User" ></label>
                                    <div class="col-lg-6">
                                        <div class="col-md-12 form-group contact-forms" style="margin-top: 15px !important;">
                                            <input class="form-check-input" type="checkbox" id="Processing_Personal_Data" name="Processing_Personal_Data" value="1" style="margin-left: -12px !important;" required>
                                            <label class="form-check-label" for="Processing_Personal_Data" style="margin-left: 20px !important;" >Разрешить обработку персональных данных.<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-12 form-group contact-forms" >
                                            <input class="form-check-input" type="checkbox" id="Notifications" name="Notifications" value="1"  style="margin-left: -12px !important;">
                                            <label class="form-check-label" for="Notifications" style="margin-left: 20px !important;" >Подписаться на уведомления о новых экскурсиях и скидках.</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Добавить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
