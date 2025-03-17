
    <div class="py-16 bg-gray-900 text-white text-center mb-80">
        <h1 class="text-5xl font-extrabold ">Kontaktujte nás</h1> 
    
        <div class="max-w-4xl mx-auto grid grid-cols-2 gap-12 items-center mt-8"> 
            <!-- Levá část - formuláře -->
            <div class="space-y-6 text-left">
                <p class="text-gray-400">Máte otázku? Zanechte nám zprávu a my se vám co nejdříve ozveme.</p>
                
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative">
                            <input type="text" id="first_name" name="first_name" placeholder="Jméno" 
                                class="w-full border-b border-gray-600 focus:border-blue-500 outline-none bg-transparent p-2 text-lg">
                        </div>
    
                        <div class="relative">
                            <input type="text" id="last_name" name="last_name" placeholder="Příjmení" 
                                class="w-full border-b border-gray-600 focus:border-blue-500 outline-none bg-transparent p-2 text-lg">
                        </div>
                    </div>
    
                    <div class="relative">
                        <input type="email" id="email" name="email" placeholder="E-mail" 
                            class="w-full border-b border-gray-600 focus:border-blue-500 outline-none bg-transparent p-2 text-lg">
                    </div>
    
                    <div class="relative">
                        <textarea id="message" name="message" placeholder="Vaše zpráva"
                            class="w-full border-b border-gray-600 focus:border-blue-500 outline-none bg-transparent p-2 text-lg h-24"></textarea>
                    </div>
    
                    <button type="submit" 
                        class="mt-4 bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">
                        Odeslat zprávu
                    </button>
                </form>
            </div>
    
            <!-- Pravá část - místo pro obrázek -->
            <div class="h-full flex justify-center items-center">
                <div class="w-80 h-80 bg-gray-800 rounded-lg shadow-lg flex items-center justify-center">
                    <span class="text-gray-500">Zde bude obrázek :)</span>
                </div>
            </div>
        </div>
    </div>
    