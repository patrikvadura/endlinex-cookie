const defaultTheme = require('tailwindcss/defaultTheme')
const generateColors = require('./src/js/tailwind/generateColors')
const generateFonts = require('./src/js/tailwind/generateFonts')

module.exports = {
  content: ['./src/*.php'],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        // Theme colors
        'default': generateColors('#242e34'),
        'accent': generateColors('#03E987'),
  
        // State colors
        'success': generateColors('#03E987'),
        'error': generateColors('#d12e41'),
        'warning': generateColors('#ffcd10'),
        'info': generateColors('#17a2b8'),
      },
      spacing: {
        '128': '32rem',
        '160': '40rem',
        '192': '48rem',
        '224': '56rem',
      },
      fontSize: {
        'title': generateFonts('1.2rem', '1.25', '500'),
        'subtitle': generateFonts('1rem', '1.25', '500'),
        'p': generateFonts('.75rem', '1.25', '400'),
        'p-sm': generateFonts('.625rem', '1', '400'),
      },
      fontFamily: {
        'sans': ['Poppins, Arial, sans-serif', ...defaultTheme.fontFamily.sans],
      }
    }
  },
  plugins: [],
}