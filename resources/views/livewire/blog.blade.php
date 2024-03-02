<div>
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  <div class="row">
    <div class="col-md-3">
      <form wire:submit="save">
        <div class="position-relative">
          <input type="text" wire:model="title" class="form-control m-5 @error('title') 'is-invalid' @enderror">
          @error('title')
            <div class="invalid-tooltip">{{ $message }}</div>
            <span>Error Di Judul</span>
          @enderror
        </div>
        <div class="position-relative">
          <textarea wire:model="body" class="form-control m-5 @error('title') 'is-invalid' @enderror"></textarea>
          @error('body')
            <div class="invalid-tooltip">{{ $message }}</div>
            <span>Error Di Body</span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
