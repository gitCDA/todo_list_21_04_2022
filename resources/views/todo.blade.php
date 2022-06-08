@extends('layouts.app')



<main>

    <!-- component -->
<div class="h-content w-full flex items-center justify-center bg-red-500 font-sans">
	<div class="bg-white rounded shadow w-1/2 lg:w-3/4 lg:max-w-lg">

        <div class="mb-4">
            <h1 class="text-grey-darkest">Todo List</h1>
            <div class="flex mt-4">
                
                <form action=" {{ route("addtodo") }} " method="post">
                    {{-- génère un token pour protéger contre les CSRF --}}
                    @csrf
                
                    @error('tache')
                    <h2  class="text-red-700">Erreur</h2>
                    @enderror
                    <input name="tache" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo">
                <button class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Add</button>
                </form>

            </div>
        </div>

        <div>

            @foreach ($tasks as $item)
                
            <div class="flex mb-4 items-center">
                <p class="w-full text-grey-darkest">{{ $item->tache }}</p>
                <form action="#" method="post">
                <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-green">Done</button>
                </form>

                <form action=" {{ route("remove") }} " method="delete">
                    @method("delete")
                <input type="hidden" id="custId" name="custId" value="3487">
                <button class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red">Remove</button>
                </form>
            </div>

            @endforeach

          	{{-- <div class="flex mb-4 items-center">
                <p class="w-full line-through text-green">Submit Todo App Component to Tailwind Components</p>
                <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-grey border-grey hover:bg-grey">Not Done</button>
                <button class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red">Remove</button>
            </div> --}}

        </div>

    </div>

</div>

</main>