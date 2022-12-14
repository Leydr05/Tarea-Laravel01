@extends('tema.app')

@section('title', 'Nueva Tarea')

@section('contenido')
    <h3>
        Registrar tarea  
    </h3>
    <form action="{{ route ('Tarea.store') }}" method="POST">
        @csrf  
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">* Nombre de la tarea</label>
                <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="...">
            </div>
            <div class="col-sm-4 ">
                <div class="form-check">
                    <input type="checkbox" name="Finalizada" id="InputFinalizada" class="form-check-input">
                    <label for="InputFinalizada" class="form-check-label">Finalizada</label>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <label for="SelectUrgencia" class="form-label">* Urgencia</label>
            <select name="urgencia" id="SelectUrgencia" class="form-select">
                <option value="0">Baja</option>
                <option value="1">Normal</option>
                <option value="2">Alta</option>
            </select>
        </div>
        <div>
            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-label">* Fecha Limite</label>
                <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control">
            </div>
            <div class="col-sm-12">
                <label for="TextAreaDescripccion" class="form-label">Descripcion</label>
                <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control"></textarea>
            </div>  
            <div class="col-sm-12 text-end my-3">
                    <button type="submit" class="btn btn-primary">
                        Guardar
                    </button>
            </div>
             
        </div>

        
    </form>
@endsection 