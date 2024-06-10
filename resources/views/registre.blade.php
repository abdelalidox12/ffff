<x-master title="Registre">

    <div class="doxx2">
    <div class="flex flex-col items-center justify-center h-screen dark">
        <div class="w-full max-w-md bg-gradient-to-b from-indigo-300 to-blue-100  rounded-lg shadow-md p-6">
          <h2 class="text-center text-3xl font-extrabold text-gray-700 cursor-pointer mb-4">Registre</h2>
          <form class="flex flex-col">
            <div class="flex space-x-4 mb-4">
              <input
                placeholder="Nom"
                class="bg-gray-300 text-black border-0 rounded-md p-2 w-1/2 focus:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-1100 transition ease-in-out duration-150"
                type="text"
              />
              <input
                placeholder="Prénom"
                class="bg-gray-300 text-black border-0 rounded-md p-2 w-1/2 focus:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                type="text"
              />
            </div>
            <input
              placeholder="Email"
              class="bg-gray-300 text-black border-0 rounded-md p-2 mb-4 focus:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
              type="email"
            />
            
            <input
              placeholder="mot de passe"
              class="bg-gray-300 text-black border-0 rounded-md p-2 mb-4 focus:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
              type="password"
            />
            <input
            placeholder="Numéro de téléphone"
            class="bg-gray-300 text-black border-0 rounded-md p-2 mb-4 focus:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            type="text"
          />
            <label class="text-sm mb-1 text-black cursor-pointer" for="gender">
              Genre
            </label>
            <select
              class="bg-gray-300 text-black border-0 rounded-md p-2 mb-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-100 transition ease-in-out duration-150"
              id="gender"
            >
              <option value="male">homme </option>
              <option value="female">femme</option>

            </select>

            <p class=" text-gray-600 mt-2">
                Vous avez déjà un compte?
              <a class="text-sm text-purple-600 hover:text-black mt-4" href="/login"
                >Se connecter</a
              >
            </p>
            <button
              class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 shadow-lg animate-pulse rounded-md shadow-lg text-white font-semibold transition duration-200 font-bold py-2 px-4 rounded-md mt-4  transition ease-in-out duration-150"
              type="submit"
            >
              Registre
            </button>
          </form>
        </div>
      </div>
      
    </div>
</x-master>

{{-- .container {
  position: relative;
  max-width: 500px;
  width: 100%;
  background: #FCEDDA;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.container header {
  font-size: 1.2rem;
  color: #000;
  font-weight: 600;
  text-align: center;
}

.container .form {
  margin-top: 15px;
}

.form .input-box {
  width: 100%;
  margin-top: 10px;
}

.input-box label {
  color: #000;
}

.form :where(.input-box input, .select-box) {
  position: relative;
  height: 35px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #808080;
  margin-top: 5px;
  border: 1px solid #EE4E34;
  border-radius: 6px;
  padding: 0 15px;
  background: #FCEDDA;
}

.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

.form .column {
  display: flex;
  column-gap: 15px;
}

.form .gender-box {
  margin-top: 10px;
}

.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}

.form .gender {
  column-gap: 5px;
}

.gender input {
  accent-color: #EE4E34;
}

.form :where(.gender input, .gender label) {
  cursor: pointer;
}

.gender label {
  color: #000;
}

.address :where(input, .select-box) {
  margin-top: 10px;
}

.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #808080;
  font-size: 1rem;
  background: #FCEDDA;
}

.form button {
  height: 40px;
  width: 100%;
  color: #000;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.2s ease;
  background: #EE4E34;
}

.form button:hover {
  background: #EE3E34;
}


<section class="container">
  <header>Registration Form</header>
  <form class="form" action="#">
      <div class="input-box">
          <label>Full Name</label>
          <input required="" placeholder="Enter full name" type="text">
      </div>
      <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input required="" placeholder="Enter phone number" type="telephone">
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input required="" placeholder="Enter birth date" type="date">
          </div>
      </div>
      <div class="gender-box">
        <label>Gender</label>
        <div class="gender-option">
          <div class="gender">
            <input checked="" name="gender" id="check-male" type="radio">
            <label for="check-male">Male</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-female" type="radio">
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-other" type="radio">
            <label for="check-other">Prefer not to say</label>
          </div>
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input required="" placeholder="Enter street address" type="text">
        <div class="column">
          <div class="select-box">
            <select>
              <option hidden="">Country</option>
              <option>USA</option>
              <option>UK</option>
              <option>Germany</option>
              <option>Japan</option>
            </select>
          </div>
        <input required="" placeholder="Enter your city" type="text">
        </div>
      </div>
      <button>Submit</button>
  </form>
</section>--}}