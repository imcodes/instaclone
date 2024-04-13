<x-feed-layout class="container">
  @push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">
  @endpush
  
<form action='{{route('upload-media')}}' method="POST" enctype="multipart/form-data" class="dark:bg-black dark:text-white w-3/4 p-4">
  @csrf  
<div class="space-y-12">
    <div class=" border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">Create New Post</h2>
      <p class="mt-1 text-sm leading-6 text-gray-600">Upload your media</p>

      @if (!session()->has('file'))
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        
        <div class="col-span-full">
          <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
             
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="file-upload" class="relative cursor-pointer rounded-md dark:bg-black font-semibold dark:text-white-300 py-2 text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload a file</span>
                  <input id="file-upload" name="post-media" type="file" class="sr-only dropify"
                    data-allowed-file-extensions="jpg jpeg gif mp4 png webp"
                    data-allowed-formats="portrait square"
                  >
                </label>
              </div>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF, WEBP, MP4 up to 10MB</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 px-3 py-2 mr-3 text-white">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Next</button>
      </div>
      @else
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          @php
            $filename = session()->get('file');
            $filepath = asset('storage/feed').'/'.$filename;
            $filetype = pathinfo($filepath,PATHINFO_EXTENSION);
          @endphp

          <div class='media-preview'>
            @if($filetype == 'mp4')
              <video src="{{ $filepath }}" controls class="preview-item"></video>
            @else
              <img src="{{ $filepath }}" alt="" class="preview-item">
            @endif
        </div>

        <input type="hidden" name="media" value="{{ $filename }}">
        <input type="hidden" name="user" value="{{ auth()->user()->id }}">

        @if(session()->has('error'))
          <p class="dark:text-white p-3 bg-red-500">{{ session()->get('error') }}</p>
        @endif

          <!-- Post title -->
          <div class="col-span-full">
              <label for="post-title" class="block text-sm font-medium leading-6 dark:text-white-300 text-gray-900">Street address</label>
              <div class="mt-2">
                <input type="text" name="post-title" id="post-title" value="{{old('post-title')}}" autocomplete="post-title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <!-- Post Description -->
            <div class="col-span-full">
              <label for="post-description" class="block text-sm font-medium leading-6 dark:text-white-300 text-gray-900">Post Description</label>
              <div class="mt-2">
                <textarea id="post-description" name="post-description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('post-description') }}</textarea>
              </div>
              <p class="mt-3 text-sm leading-6 text-gray-600">Write a few description post-description your post.</p>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm font-semibold leading-6 px-3 py-2 mr-3 text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Publish</button>
        </div>
      @endif
    </div>

  </div>

  
</form>
@push('scripts')
  
  <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
  <script>
    $('.dropify').dropify({
      tpl: {
        wrap: '<div class="dropify-wrapper !dark:bg-gray-900 dark:!text-slate-200"></div>',
      }
    });
  </script>

  @if(session()->has('error'))
      <script>
          $.notify("{{session()->get('error')}}",'error')
      </script>
      {{session()->remove('error')}}
   @endif
@endpush
</x-feed-layout>