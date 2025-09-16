<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login — Tailwind</title>

  <!-- Tailwind Play CDN (dùng nhanh, không cho production lâu dài) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Optional: tiny script để bật dark mode nếu muốn -->
  <script>
    // Uncomment to enable dark by default:
    // document.documentElement.classList.add('dark')
  </script>
</head>
<body class="min-h-screen bg-gray-50 dark:bg-gray-900 flex items-center justify-center p-6">
  <main class="w-full max-w-xl">
    <section class="bg-white dark:bg-gray-800 shadow-md rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">
      <!-- Left: illustration / info (hidden on small) -->
      <div class="hidden md:flex flex-col items-center justify-center p-8 bg-gradient-to-br from-indigo-600 to-purple-600 text-white">
        <h2 class="text-3xl font-semibold mb-2">Chào mừng trở lại</h2>
        <p class="opacity-90 mb-6">Đăng nhập để quản lý tài khoản và tiếp tục công việc của bạn.</p>
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=4e0b8a0f2d07f986a7b8c9d0a6d23f03"
             alt="illustration" class="rounded-xl w-full object-cover max-w-xs shadow-lg" />
      </div>

      <!-- Right: form -->
      <div class="p-8">
        <header class="mb-6">
          <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Đăng nhập</h1>
          <p class="text-sm text-gray-500 dark:text-gray-300 mt-1">Nhập email và mật khẩu của bạn để tiếp tục.</p>
        </header>

        <form id="loginForm" action="#" method="POST" novalidate class="space-y-5">
          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Email</label>
            <input
              id="email"
              name="email"
              type="email"
              required
              aria-required="true"
              placeholder="you@example.com"
              class="w-full px-4 py-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
            />
            <p id="emailError" class="mt-1 text-sm text-rose-600 hidden" role="alert"></p>
          </div>

          <!-- Password -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Mật khẩu</label>
            <div class="relative">
              <input
                id="password"
                name="password"
                type="password"
                required
                aria-required="true"
                placeholder="••••••••"
                minlength="6"
                class="w-full px-4 py-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 pr-12"
              />
              <button type="button" id="togglePwd" aria-label="Show password"
                      class="absolute inset-y-0 right-2 px-2 text-sm text-gray-500 dark:text-gray-300">
                Hiện
              </button>
            </div>
            <p id="pwdError" class="mt-1 text-sm text-rose-600 hidden" role="alert"></p>
          </div>

          <!-- Remember + Forgot -->
          <div class="flex items-center justify-between">
            <label class="inline-flex items-center gap-2">
              <input type="checkbox" name="remember" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
              <span class="text-sm text-gray-600 dark:text-gray-300">Ghi nhớ đăng nhập</span>
            </label>
            <a href="#" class="text-sm text-indigo-600 hover:underline">Quên mật khẩu?</a>
          </div>

          <!-- Submit -->
          <div>
            <button type="submit"
                    class="w-full inline-flex justify-center items-center gap-2 px-4 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
              Đăng nhập
            </button>
          </div>

          <!-- Divider -->
          <div class="flex items-center gap-3">
            <span class="flex-1 h-px bg-gray-200 dark:bg-gray-700"></span>
            <span class="text-xs text-gray-400">hoặc</span>
            <span class="flex-1 h-px bg-gray-200 dark:bg-gray-700"></span>
          </div>

          <!-- Social (example) -->
          <div class="grid grid-cols-2 gap-3">
            <button type="button" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22 12A10 10 0 1 0 2 12a10 10 0 0 0 20 0zM10.9 17v-6.2H8.9V9.3h2v-1.5c0-1.9 1.1-3 2.8-3 .8 0 1.6.1 1.6.1v1.8h-1c-1 0-1.3.6-1.3 1.2V9.3h2.3l-.4 1.5h-1.9V17"></path></svg>
              Facebook
            </button>
            <button type="button" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M21.6 11.2h-9.6v2.6h5.5c-.24 1.4-1.4 4.1-5.5 4.1-3.3 0-6.1-2.7-6.1-6.1s2.8-6.1 6.1-6.1c1.9 0 3.2.8 3.9 1.5l1.7-1.6C16.6 4.5 14.6 3.6 12 3.6 6.9 3.6 2.8 7.7 2.8 12.8s4.1 9.2 9.2 9.2c5.3 0 8.7-3.9 8.7-9.3 0-.6-.1-1-.1-1.5z"></path></svg>
              Google
            </button>
          </div>

          <p class="text-sm text-center text-gray-500 dark:text-gray-300">
            Chưa có tài khoản?
            <a href="#" class="text-indigo-600 hover:underline">Đăng ký</a>
          </p>
        </form>
      </div>
    </section>
  </main>

  <!-- Simple client-side validation + toggle password -->
  <script>
    (function(){
      const form = document.getElementById('loginForm');
      const email = document.getElementById('email');
      const pwd = document.getElementById('password');
      const emailErr = document.getElementById('emailError');
      const pwdErr = document.getElementById('pwdError');
      const toggle = document.getElementById('togglePwd');

      toggle.addEventListener('click', () => {
        const isPwd = pwd.type === 'password';
        pwd.type = isPwd ? 'text' : 'password';
        toggle.textContent = isPwd ? 'Ẩn' : 'Hiện';
      });

      form.addEventListener('submit', (e) => {
        let ok = true;
        emailErr.classList.add('hidden');
        pwdErr.classList.add('hidden');

        if (!email.value || !/^\S+@\S+\.\S+$/.test(email.value)) {
          emailErr.textContent = 'Vui lòng nhập email hợp lệ.';
          emailErr.classList.remove('hidden');
          ok = false;
        }
        if (!pwd.value || pwd.value.length < 6) {
          pwdErr.textContent = 'Mật khẩu cần ít nhất 6 ký tự.';
          pwdErr.classList.remove('hidden');
          ok = false;
        }
        if (!ok) {
          e.preventDefault();
        }
      });
    })();
  </script>
</body>
</html>
