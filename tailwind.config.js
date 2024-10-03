/** @type {import('tailwindcss').Config} */
export default {
  
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {},
    // colors: {
    //   black: '#333333',
    //   blue: '#334982',
    //   grey: '#f3f3f3',
    //   orange: '#fdb913',
    //   pink: '#e40087',
    //   purple: '#782b8f',
    //   red: '#dd372f',
    //   teal: '#00857d',
    //   white: '#fff',
    // },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('preline/plugin'),
    // require("@tailwindcss/forms")({
    //   strategy: 'base', // only generate global styles
    //   strategy: 'class', // only generate classes
    // }),
  ],
  
  experimental: {
    applyComplexClasses: true,
  },
}

