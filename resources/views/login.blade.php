
<x-master title="login"  >

<div class="doxx1 ">
<div
  style="animation: slideInFromLeft 1s ease-out;"
  class=" max-w-md w-full bg-gradient-to-b from-indigo-300 to-blue-100   rounded-xl shadow-2xl overflow-hidden p-8 space-y-8"
>
  <h2
    style="animation: appear 2s ease-out;"
    class="text-center text-3xl font-extrabold text-gray-700 cursor-pointer"
  >
  Bienvenu(e)
  </h2>
  <p style="animation: appear 3s ease-out;" class="text-center text-gray-700">
    Connectez-vous à votre compte
  </p>
  <form method="POST" action="#" class="space-y-2 w-400">

        <input
        placeholder="Email"
        class="bg-gray-300  text-black border-0 rounded-md p-2 mb-4 focus:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
        type="email"
      />


      
      <input
        placeholder="mot de passe"
        class="bg-gray-300 text-black border-0 rounded-md p-2 mb-4 focus:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
        type="password"
      />
 
    <div class="flex items-center justify-between">

      <a class="text-sm text-purple-700 hover:text-black text-decoration-none" href="#"
        >Mot de passe oublié?</a
      >
    </div>
    <button
      class="w-full py-2 px-4  rounded-lg bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 shadow-lg animate-pulse rounded-md shadow-lg text-white font-semibold transition duration-200 "
      type="submit"
    >
    connexion
    </button>
  </form>
  <div class="text-center text-gray-600">
    Vous n'avez pas de compte ?
    <a class="text-purple-600 hover:text-black" href="/registre"> S'inscrire</a>
  </div>
</div>

</div>
</x-master>