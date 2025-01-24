<div class="min-h-screen flex flex-col">
    <!-- Header -->
    <br>
   <h1 class="text-3xl text-center">Inscription</h1>
    <br>
    <hr>
    <!-- Contenu principal -->
    <main class="flex-grow container mx-auto px-4 py-6">
        <form wire:submit.prevent="save" class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
            <!-- Champ Nom -->
            <livewire:form-input
                name="name"
                wire:model="{{ $name }}"
                label="Nom complet"
                placeholder="Votre nom"
                :required="true"
            />
            <!-- Champ Email -->
            <livewire:form-input
                type="email"
                name="email"
                wire:model="{{ $email }}"
                label="Adresse email"
                placeholder="Entrez votre email"
                :required="true"
            />

            <livewire:form-input
                type="date"
                wire:model="{{ $birthday }}"
                name="birthday"
                label="Date de naissance"
                placeholder="Date de naissance"
                :required="true"
            />

            <!-- Champ Mot de passe -->
            <livewire:form-input
                type="password"
                wire:model="{{ $password }}"
                name="password"
                label="Mot de passe"
                placeholder="Mot de passe"
                :required="true"
            />

            <!-- Bouton de soumission -->
            <button type="submit" class="mt-6 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-lg hover:from-blue-700 hover:to-purple-700 transition duration-300 shadow-md w-full">
                S'inscrire
            </button>
        </form>
    </main>
</div>
