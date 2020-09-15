@csrf
<div class="form-group m-2">
  <label for="title">タイトル名</label>
  <input type="text" class="form-control" name="title" id="title" required value="{{ $todo->title ?? old('title')}}" />
  <label for="title">期限</label>
  <input type="text" class="form-control" name="due_date" id="due_date" required value="{{ $todo->due_date ?? old('due_date')}}" />
</div>