
<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($enquiryAides)->name) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($enquiryAides)->email) }}" minlength="1" maxlength="255" required="true" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('number') ? 'has-error' : '' }}">
    <label for="number" class="col-md-2 control-label">Number</label>
    <div class="col-md-10">
        <input class="form-control" name="number" type="text" id="number" value="{{ old('number', optional($enquiryAides)->number) }}" min="1" max="255" required="true" placeholder="Enter number here...">
        {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('message') ? 'has-error' : '' }}">
    <label for="message" class="col-md-2 control-label">Message</label>
    <div class="col-md-10">
        <textarea class="form-control" name="message" cols="50" rows="10" id="message" required="true" placeholder="Enter message here...">{{ old('message', optional($enquiryAides)->message) }}</textarea>
        {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
    </div>
</div>

