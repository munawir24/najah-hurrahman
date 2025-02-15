// import preset from './vendor/filament/support/tailwind.config.preset'

// export default {
//     presets: [preset],
//     content: [
//         './app/Filament/**/*.php',
//         './resources/views/filament/**/*.blade.php',
//         './vendor/filament/**/*.blade.php',
//     ],
// }
/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./vendor/filament/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
    },
    plugins: [
      require('@tailwindcss/forms'), // Memperbaiki tampilan form
      require('@tailwindcss/typography'),
    ],
  };

