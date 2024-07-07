<section class="flex flex-col items-center px-10 py-14 text-2xl leading-6 bg-white rounded-lg border border-solid shadow-lg border-slate-200 max-md:px-5 mx-60">
  <h1 class="text-4xl font-black leading-6 text-gray-800 text-center mb-12">Рейтинг голосования</h1>
  <table class="w-full max-w-[1231px] border-collapse">
    <thead>
      <tr class="grid grid-cols-4 gap-5 px-8 py-10 text-xl leading-6 rounded-lg bg-slate-50 text-slate-500 max-md:px-5">
        <th class="text-center">Место</th>
        <th class="text-center">Название работы</th>
        <th class="text-center">Количество голосов</th>
        <th class="text-center">Процент</th>
      </tr>
    </thead>
    <tbody>
      @foreach($members as $member)
        
        <tr class="grid grid-cols-4 gap-5 mt-6 max-md:mt-10">
          <td class="text-center text-gray-800 flex items-center justify-center">{{$index ++}}</td>
          <td class="text-center text-gray-900 flex items-center justify-center">{{$member->title}}</td>
          <td class="text-center text-emerald-500 flex items-center justify-center">{{$member->votes}}</td>
          <td class="text-center text-sky-500 flex items-center justify-center">{{$member->votes / $sumVotes * 100}}%</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</section>