<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">

                @if ( !empty ( $posts->id) )

                <div class="form-group">
                    <label for="user_id" class="negrita">Usuario:</label>
                    <div>
                        <input class="form-control" required="required" name="user_id" type="text" id="user_id" value="{{ $posts->user['id'] }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" enctype="multipart/form-data" class="negrita">Selecciona una imagen:</label>
                    <div>
                        <input name="image" type="file" id="image" accept="image/png, image/jpeg, image/jpg">
                        <br>
                        <br>
                        @if ( !empty ( $posts->image) )

                        <span>Imagen Actual: </span>
                        <br>
                        <img src="../../../storage/posts/{{ $posts->image }}" width="200" class="img-fluid">

                        @else

                        Aún no se ha cargado una imagen para este posteo

                        @endif
                    </div>

                </div>

                <div class="form-group">
                    <label for="name" class="negrita">Descripcion:</label>
                    <div>
                        <input class="form-control" required="required" name="description" type="text" id="description" value="{{ $posts->description }}">
                    </div>
                </div>






                @else

                <div class="form-group">
                    <label for="image" enctype="multipart/form-data" class="negrita">Selecciona una imagen:</label>
                    <div>
                        <input name="image" type="file" id="image" accept="image/png, image/jpeg, image/jpg">
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="negrita">Descripcion:</label>
                    <div>
                        <input class="form-control" placeholder="Today, having a relaxing day" required="required" name="description" type="text" id="description">
                    </div>
                </div>




                <div style="width:200px;">
                    <select name="user_id">
                        <option value="">Elija un Usuario</option>
                        @forelse ($users as $key => $user)
                        <option value="{{$user['id']}}">{{$user["userName"]}}</option>

                        @empty
                        <option value="">NO HAY</option>
                        @endforelse
                    </select>
                </div>

                @endif

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin/posts') }}" class="btn btn-warning">Cancelar</a>

                <br>
                <br>

            </div>
        </section>
    </div>
</div>
