@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome back, {{ auth()->user()->name }}!</h1>
</div>
<p>
  Pada website ini akan memberikan rekomendasi makanan ringan atau <em>snack</em> yang ada di minimarket untuk kesehatan pada tubuh anda.<br>
  Alasan website ini dibuat agar pengguna bisa memilih makanan yang sesuai dengan kesehatan tubuh untuk menghindari penyakit yang disebabkan oleh
  karbohidrat, lemak dan protein yang berlebihan .
</p>
<h5>Kelebihan Protein</h5>
<p>
  <strong> Kehilangan kalsium </strong><br>
  Asupan tinggi protein bisa menyebabkan tubuh lebih banyak membuang kalsium.
  Berkurangnya jumlah kalsium dalam tubuh terbukti dapat membuat tulang keropos dan meningkatkan risiko terjadinya osteoporosis.<br>
  <strong>Diare</strong><br>
  Mengonsumsi terlalu banyak susu atau makanan olahan tinggi protein dan rendah serat dapat menyebabkan diare.
  Ini akan lebih parah jika kamu mengonsumsi laktosa atau sumber protein seperti daging goreng, ikan, dan unggas.<br>
</p>
<h5>Kelebihan Lemak</h5>
<p>
  <strong>Kerusakan dinding arteri</strong><br>
  Konsumsi lemak jenuh berlebihan akan membuat kandungan kolesterol dalam darah meningkat. Kondisi ini akan memberikan efek buruk untuk arteri jantung, jika hal ini terjadi maka akan memicu masalah pada organ ginjal dan otak.<br>
  <strong>Penyakit Kardiovaskular</strong><br>
  Penyakit kardiovaskular juga dapat terpicu akibat kelebihan lemak pada tubuh.
  Karena, Body Mass Index (BMI) yang bertambah bisa membuat tekanan darah, kolesterol jahat, trigliserida, gula darah, dan inflamasi meningkat.<br>
  Kondisi tersebut dapat memicu peningkatan risiko penyakit kardiovaskular seperti penyakit jantung koroner, stroke, dan kematian akibat penyakit kardiovaskular.
</p>
<h5>Kelebihan Karbohidrat</h5>
<p>
  <strong>Meningkatkan risiko penyakit jantung</strong><br>
  Konsumsi banyak karbohidrat sederhana bisa meningkatkan kolesterol. Pasalnya, karbohidrat bisa membuat gula darah naik melonjak dan menyebabkan lemak darah trigliserida meningkat.<br>
  <strong>Meningkatkan risiko diabetes</strong><br>
  Diabetes melitus tipe 2 merupakan penyakit yang bisa muncul akibat kelebihan asupan karbohidrat. Tepung-tepungan dan gula merupakan jenis karbohidrat yang bisa meningkatkan kadar gula darah secara drastis. Hal ini membuat tubuh bekerja keras menghasilkan insulin agar gula masuk ke sel-sel tubuh.
</p>

@endsection