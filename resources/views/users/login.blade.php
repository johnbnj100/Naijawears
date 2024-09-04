<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | TailGrids</title>
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="/tailwind/assets/css/tailwind.css" />
  </head>
  <body>
    <!-- ====== Contact Section Start -->
    <section
      class="flex justify-center items-center mx-auto relative z-10 overflow-hidden bg-white py-20 dark:bg-dark lg:py-[120px]">
              <form method="POST" action="/users/authenticate">
                @csrf
                <div class="mb-6">
                    <h1 class="text-center text-primary p-10 text-2xl"> LOGIN TO YOUR ACCOUNT </h1>
                </div>
                <div class="mb-6">
                  <input
                    type="email"
                    name="email"
                    value="{{old('email')}}"
                    placeholder="Email"
                    class="w-full rounded-2xl border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
                  />
                  @error('email')
                  <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                  <input
                    type="password"
                    name="password"
                    value="{{old('password')}}"
                    placeholder="Password"
                    class="w-full rounded-2xl border border-stroke px-[14px] py-3 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
                  />
                  @error('password')
                  <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                </div>

                <div>
                  <button
                    type="submit"
                    class="w-full rounded border border-primary bg-primary p-3 text-white transition hover:bg-opacity-90"
                  >
                    LOGIN
                  </button>
                </div>
            </form>
         </div>
    </section>
    <!-- ====== Contact Section End -->
  </body>
</html>
