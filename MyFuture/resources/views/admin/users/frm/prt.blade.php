<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">

                @if ( !empty ( $users->id) )

                <div class="form-group">
                    <label for="name" class="negrita">Nombre:</label>
                    <div>
                        <input class="form-control" placeholder="Franco" required="required" name="name" type="text" id="name" value="{{ $users->name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="lastName" class="negrita">Apellido:</label>
                    <div>
                        <input class="form-control" placeholder="Perez" required="required" name="lastName" type="text" id="lastName" value="{{ $users->lastName }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="userName" class="negrita">Usuario:</label>
                    <div>
                        <input class="form-control" placeholder="NaithanPerx" required="required" name="userName" type="text" id="userName" value="{{ $users->userName }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="negrita">Email:</label>
                    <div>
                        <input class="form-control" placeholder="NaithanPerx@hotmail.com" required="required" name="email" type="email" id="email" value="{{ $users->email }}">
                    </div>
                </div>


                <div class="form-group">
                    <label for="birthday" enctype="multipart/form-data" class="negrita">Fecha De Nacimiento:</label>
                    <div>
                        <input class="form-control" required="required" name="birthday" type="date" id="birthday" value="{{ $users->birthday }}" autocomplete="birthday">
                    </div>
                </div>


                <div class="form-group">
                    <label for="genre" enctype="multipart/form-data" class="negrita">Genero</label>
                    <div>
                        <label for="genre_male">Masculino</label>
                        <input class="form-control" required="required" name="genre" type="radio" id="genre_male" value="{{$users->genre}}">

                        <label for="genre_femaile">Femenino</label>
                        <input class="form-control" required="required" name="genre" type="radio" id="genre_femaile" value="{{$users->genre}}">
                    </div>
                </div>

                <div class=" form-group">
                    <label for="password" enctype="multipart/form-data" class="negrita">Password</label>
                    <div>
                        <input class="form-control" required="required" name="password" type="password" id="password" required autocomplete="password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="avatar" enctype="multipart/form-data" class="negrita">Selecciona una imagen:</label>
                    <div>
                        <input name="avatar" type="file" id="avatar" accept="image/png, image/jpeg, image/jpg">
                        <br>
                        <br>
                        @if ( !empty ( $users->avatar) )

                        <span>Imagen Actual: </span>
                        <br>
                        <img src="../../../storage/avatar/{{ $users->avatar }}" width="200" class="img-fluid">

                        @else

                        Aún no se ha cargado una imagen para este producto

                        @endif
                    </div>

                </div>

                @else

                <div class="form-group">
                    <label for="name" class="negrita">Nombre:</label>
                    <div>
                        <input class="form-control" placeholder="Franco" required="required" name="name" type="text" id="name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="lastName" class="negrita">Apellido:</label>
                    <div>
                        <input class="form-control" placeholder="Perez" required="required" name="lastName" type="text" id="lastName">
                    </div>
                </div>

                <div class="form-group">
                    <label for="userName" class="negrita">Nombre De Usuario:</label>
                    <div>
                        <input class="form-control" placeholder="NaithanPerx" required="required" name="userName" type="text" id="userName">
                    </div>
                </div>


                <div class="form-group">
                    <label for="email" class="negrita">Email:</label>
                    <div>
                        <input class="form-control" placeholder="NaithanPerx@hotmail.com" required="required" name="email" type="email" id="email">
                    </div>
                </div>


                <div class="form-group">
                    <label for="birthday" class="negrita">Fecha De Nacimiento:</label>
                    <div>
                        <input class="form-control" required="required" name="birthday" type="date" id="birthday">
                    </div>
                </div>

                <div class="form-group">
                    <label for="genre" enctype="multipart/form-data" class="negrita">Genero</label>
                    <div>
                        <label for="genre_male">Masculino</label>
                        <input class="form-control" required="required" name="genre" type="radio" id="genre_male" value="Male">

                        <label for="genre_femaile">Femenino</label>
                        <input class="form-control" required="required" name="genre" type="radio" id="genre_femaile" value="Female">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" enctype="multipart/form-data" class="negrita">Password</label>
                    <div>
                        <input class="form-control" required="required" name="password" type="password" id="password" required autocomplete="password">
                    </div>
                </div>


                <div class="form-group">
                    <label for="avatar" enctype="multipart/form-data" class="negrita">Selecciona una imagen:</label>
                    <div>
                        <input name="avatar" type="file" id="avatar" accept="image/png, image/jpeg, image/jpg">
                    </div>
                </div>

                @endif

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin/users') }}" class="btn btn-warning">Cancelar</a>

                <br>
                <br>

            </div>
        </section>
    </div>
</div>
