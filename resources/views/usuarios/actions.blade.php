<form action="{{route('usuarios.destroy', $id)}}" method="POST">
          <a href="{{route('usuarios.show', $id)}}"> <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i>
 </button></a>

          <a href="{{route('usuarios.edit', $id)}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>

          @csrf
          @method('DELETE')

           


                 <button type="Submit" class="btn btn-danger  btn-sm"><i class="far fa-trash-alt"></i></button> 
        </form>