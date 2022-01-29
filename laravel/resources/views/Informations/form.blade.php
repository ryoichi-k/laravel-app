@csrf
<div style="margin-left: 400px; margin-top: 100px; margin-right: 100px;">
    <h2>お知らせ作成</h2>
  <label>タイトル(50文字まで)</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}" placeholder="例：【重要】2021年度健康診断のご案内">

  <label>本文(1000文字まで)</label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>
</div>
