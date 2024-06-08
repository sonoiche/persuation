/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1a1a1a',
        secondary: '#fd6902',
        pPurple: '#cc76f4',
        darkGreen: '#467c79'
      },
      fontFamily: {
        wavehaus: ['Wavehaus', 'sans-serif'],
        wavehausSemiBold: ['Wavehaus-SemiBold', 'sans-serif'],
        wavehausBold: ['Wavehaus-Bold', 'sans-serif'],
        wavehausExtraBold: ['Wavehaus-EBold', 'sans-serif'],
        malishroman: ['Mulish', 'sans-serif']
      }
    },
    screens: {
      'iphone': '375px',
      'xs': '425px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px'
    }
  },
  plugins: [
    function ({ addUtilities }) {
      addUtilities({
        '.border-gradient': {
          'background-image': 'linear-gradient(to right, theme("colors.secondary"), theme("colors.pPurple"))',
          'background-origin': 'border-box',
          'background-clip': 'border-box',
        }
      });
    },
  ],
}

