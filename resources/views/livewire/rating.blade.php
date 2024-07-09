<section class="flex flex-col items-center px-5 py-10 text-base leading-5 bg-white rounded-lg border border-solid shadow-lg border-slate-200 sm:px-10 sm:py-14 text-2xl mx-8 md:mx-24 lg:mx-24 xl:mx-40 2xl:mx-60">
  <h1 class="text-2xl font-black leading-5 text-gray-800 text-center mb-6 sm:text-3xl sm:mb-8 md:text-4xl md:mb-12">Рейтинг голосования</h1>
  <table class="w-full max-w-[1231px] border-collapse">
    <thead>
      <tr class="grid grid-cols-4 gap-1 py-5 text-xs leading-5 rounded-lg bg-slate-50 text-slate-500 sm:gap-5 sm:py-10 sm:text-xl  items-center">
        <th class="text-center">Место</th>
        <th class="text-center">Название работы</th>
        <th class="text-center">Количество голосов</th>
        <th class="text-center">Процент</th>
      </tr>
    </thead>
    <tbody>
      @foreach($members as $member)
        <tr class="grid grid-cols-4 gap-3 mt-3 max-md:mt-6 sm:gap-5 sm:mt-6">
          <td class="text-center text-gray-800 flex items-center justify-center">{{$index ++}}</td>
          <td class="text-center text-gray-900 flex items-center justify-center">{{$member->title}}</td>
          <td class="text-center text-emerald-500 flex items-center justify-center">{{$member->votes}}</td>
          <td class="text-center text-sky-500 flex items-center justify-center">{{ number_format($member->votes / $sumVotes * 100, 2) }}%</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</section>