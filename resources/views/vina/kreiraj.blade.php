<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Kreiraj Vino</h2>
        <p class="mb-4">Objavi vino</p>
      </header>
  
      <form method="POST" action="/vina" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
          <label for="ime" class="inline-block text-lg mb-2">Ime na vino</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="ime"
            value="{{old('ime')}}" />
  
          @error('ime')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="godina" class="inline-block text-lg mb-2">Godina</label>
          <input type="number" class="border border-gray-200 rounded p-2 w-full" name="godina"
            placeholder="Vnesi Godina" value="{{old('godina')}}" />
  
          @error('godina')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
            <label for="cena" class="inline-block text-lg mb-2">Cena</label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="cena"
              placeholder="Vnesi Cena" value="{{old('cena')}}" />
    
            @error('cena')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
  
        <div class="mb-6">
          <label for="adresa" class="inline-block text-lg mb-2">Adresa</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="adresa"
            placeholder="Vnesi Adresa" value="{{old('adresa')}}" />
  
          @error('adresa')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
            <label for="vinarija" class="inline-block text-lg mb-2">Vinarija</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="vinarija"
              placeholder="Vnesi Vinarija" value="{{old('vinarija')}}" />
    
            @error('vinarija')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="tip" class="inline-block text-lg mb-2">Tip</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tip" value="{{old('tip')}}" />
    
            @error('tip')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">
            Email
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="strana" class="inline-block text-lg mb-2">
            Strana
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="strana"
            value="{{old('strana')}}" />
  
          @error('strana')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="grad" class="inline-block text-lg mb-2">
            Grad
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="grad"
            placeholder="Vnesi Grad" value="{{old('grad')}}" />
  
          @error('grad')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="slika" class="inline-block text-lg mb-2">
            Slika
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="slika" />
  
          @error('slika')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div> 
  
        <div class="mb-6">
          <label for="opis" class="inline-block text-lg mb-2">
            Opis
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="opis" rows="10"
            placeholder="Vnesi kratok opis za vinoto">{{old('opis')}}</textarea>
  
          @error('opis')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Vnesi Vino
          </button>
  
          <a href="/" class="text-black ml-4"> Nazad </a>
        </div>
      </form>
    </x-card>
  </x-layout>