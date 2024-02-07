function hexToRgb(hex) {
  let r = 0, g = 0, b = 0;
  
  // 3 digits
  if (hex.length == 4) {
    r = "0x" + hex[1] + hex[1];
    g = "0x" + hex[2] + hex[2];
    b = "0x" + hex[3] + hex[3];

  // 6 digits
  } else if (hex.length == 7) {
    r = "0x" + hex[1] + hex[2];
    g = "0x" + hex[3] + hex[4];
    b = "0x" + hex[5] + hex[6];
  }
  
  return [+(r), +(g), +(b)];
}

function rgbToHex(r, g, b) {
  r = Math.max(0, Math.min(255, r)).toString(16);
  g = Math.max(0, Math.min(255, g)).toString(16);
  b = Math.max(0, Math.min(255, b)).toString(16);

  return "#" + (r.length == 1 ? "0" + r : r) + (g.length == 1 ? "0" + g : g) + (b.length == 1 ? "0" + b : b);
}

function lightenDarkenHex(hex, amount) {
  const [r, g, b] = hexToRgb(hex);

  return rgbToHex(r + amount, g + amount, b + amount);
}


function generateColors(baseColor) {
  return {
    DEFAULT: baseColor,
    lightest: lightenDarkenHex(baseColor, 75),
    lighten: lightenDarkenHex(baseColor, 50),
    light: lightenDarkenHex(baseColor, 25),
    dark: lightenDarkenHex(baseColor, -25),
    darken: lightenDarkenHex(baseColor, -50),
    darkest: lightenDarkenHex(baseColor, -75),
  };
}

module.exports = generateColors;