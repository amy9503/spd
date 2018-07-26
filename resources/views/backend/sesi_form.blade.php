@csrf
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Name</label>
  <div class="col-sm-10">
    <input name="name" type="text" class="form-control" placeholder="Name" value="{{ old('name',$sesi->name) }}">
  </div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Status</label>
  <div class="col-sm-10">
    <input name="status" type="checkbox" {{ old('status',$sesi->status) ? 'checked' : '' }}>
  </div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Pingat</label>
  <div class="col-sm-10">
    <input name="pingat" type="text" class="form-control" placeholder="Nama pingat" value="{{ old('pingat',$sesi->pingat) }}">
  </div>
</div>