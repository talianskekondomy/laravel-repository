@extends('layouts.app')

@section('content')
<div class="h-20"> </div>
<div class="container mx-auto py-10">
    <h1 class="text-5xl font-semibold text-center mb-8 text-blacks">Časté dotazy</h1>
    <div class="space-y-6">
        <!-- První dotaz -->
        <div>
            <button class="w-full text-left text-xl font-medium text-black px-6 py-4 rounded-lg flex justify-between items-center"
                    onclick="toggleAnswer(this)">
                Jak dlouho trvá zpracování mé žádosti?
                <span class="ml-4 text-black">+</span>
            </button>
            <div class="hidden mt-2 text-black px-6 answer">
                Zpracování žádosti obvykle trvá 1-2 pracovní dny. Budeme vás informovat e-mailem.
            </div>
        </div>

        <!-- Druhý dotaz -->
        <div>
            <button class="w-full text-left text-xl font-medium text-black px-6 py-4 rounded-lg flex justify-between items-center"
                    onclick="toggleAnswer(this)">
                Jak mohu kontaktovat podporu?
                <span class="ml-4 text-black">+</span>
            </button>
            <div class="hidden mt-2 text-black px-6 answer">
                Podporu můžete kontaktovat prostřednictvím našeho e-mailu support@firma.cz nebo telefonicky na čísle 123 456 789.
            </div>
        </div>

        <!-- Třetí dotaz -->
        <div>
            <button class="w-full text-left text-xl font-medium text-black px-6 py-4 rounded-lg flex justify-between items-center"
                    onclick="toggleAnswer(this)">
                Nabízíte vrácení peněz?
                <span class="ml-4 text-black">+</span>
            </button>
            <div class="hidden mt-2 text-black px-6 answer">
                Ano, nabízíme vrácení peněz do 30 dnů od zakoupení, pokud nejste s produktem spokojeni.
            </div>
        </div>

        <!-- Nový dotaz 1 -->
        <div>
            <button class="w-full text-left text-xl font-medium text-black px-6 py-4 rounded-lg flex justify-between items-center"
                    onclick="toggleAnswer(this)">
                Jaké vonné svíčky doporučujete pro relaxaci?
                <span class="ml-4 text-black">+</span>
            </button>
            <div class="hidden mt-2 text-black px-6 answer">
                Pro relaxaci doporučujeme svíčky s levandulí, vanilkou nebo skořicí. Tyto vůně mají uklidňující účinky.
            </div>
        </div>

        <!-- Nový dotaz 2 -->
        <div>
            <button class="w-full text-left text-xl font-medium text-black px-6 py-4 rounded-lg flex justify-between items-center"
                    onclick="toggleAnswer(this)">
                Jak dlouho svíčka vydrží hořet?
                <span class="ml-4 text-black">+</span>
            </button>
            <div class="hidden mt-2 text-black px-6 answer">
                Doba hoření závisí na velikosti svíčky, ale obvykle se pohybuje mezi 20-50 hodinami.
            </div>
        </div>

        <!-- Nový dotaz 3 -->
        <div>
            <button class="w-full text-left text-xl font-medium text-black px-6 py-4 rounded-lg flex justify-between items-center"
                    onclick="toggleAnswer(this)">
                Jaké jsou výhody sojových svíček?
                <span class="ml-4 text-black">+</span>
            </button>
            <div class="hidden mt-2 text-black px-6 answer">
                Sojové svíčky jsou ekologické, hoří pomalu a vydávají jemnější vůni. Navíc jsou vyrobeny z přírodního materiálu.
            </div>
        </div>

    </div>
</div>

<script>
function toggleAnswer(button) {
    const answer = button.nextElementSibling;
    const isHidden = answer.classList.contains('hidden');

    // Nastavení animace pro plynulý efekt
    if (isHidden) {
        answer.classList.remove('hidden');
        answer.style.maxHeight = answer.scrollHeight + "px"; // Zajistí animaci
    } else {
        answer.style.maxHeight = "0px"; // Skryje odpověď
        setTimeout(() => answer.classList.add('hidden'), 300); // Po animaci skryje element
    }

    button.querySelector('span').textContent = isHidden ? '−' : '+';
}
</script>

<style>
.answer {
    overflow: hidden;
    max-height: 0px; /* Začíná skrytý */
    transition: max-height 0.3s ease-out; /* Animace */
}
</style>
@endsection
