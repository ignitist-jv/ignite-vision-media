<!doctype html>
<html>
    <head>
        <title>Ignite Vision Media</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="facebook-domain-verification" content="a2vy365mtbvzeexy4s04w0gbedepe6" />
        <link rel="preconnect" href="https://fonts.gstatic.com"/>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&amp;display=swap" rel="stylesheet"/>
        <link href="https://api.fontshare.com/v2/css?f[]=clash-grotesk@400,300,500&amp;display=swap" rel="stylesheet"/>
        <!-- <link rel="stylesheet" href="css/tailwind/tailwind.min.css"/> -->
         <script src="https://cdn.tailwindcss.com"></script>
         <script>
            tailwind.config = {
                theme: {
                    container: {
                        center: true,
                        screens: {
                            sm: '640px',
                            md: '768px',
                            lg: '1024px',
                            xl: '1280px',
                        },
                    },
                    extend: {
                        animation: {
                            'spin-slow': 'spin 20s linear infinite',
                        },
                    },
                },
                presets: [
                {
                    "theme": {
                        "extend": {
                            "screens": {
                                "sm": "640px",
                                "md": "768px",
                                "lg": "1024px",
                                "xl": "1280px",
                                "2xl": "1536px"
                            },
                            "colors": {
                                "transparent": "transparent",
                                "current": "currentColor",
                                "black": "#000",
                                "white": "#fff",
                                "red": {
                                    "50": "#FFF1F1",
                                    "100": "#FFDFDF",
                                    "200": "#FFC5C5",
                                    "300": "#FF9D9D",
                                    "400": "#FF6464",
                                    "500": "#FF1E1E",
                                    "600": "#ED1515",
                                    "700": "#C80D0D",
                                    "800": "#A50F0F",
                                    "900": "#881414"
                                },
                                "green": {
                                    "50": "#FDFFE4",
                                    "100": "#F9FFC4",
                                    "200": "#F1FF90",
                                    "300": "#E2FF50",
                                    "400": "#CCFF00",
                                    "500": "#B2E600",
                                    "600": "#8AB800",
                                    "700": "#688B00",
                                    "800": "#526D07",
                                    "900": "#455C0B"
                                },
                                "gray": {
                                    "50": "#F6F6F6",
                                    "100": "#E7E7E7",
                                    "200": "#D1D1D1",
                                    "300": "#B0B0B0",
                                    "400": "#888888",
                                    "500": "#6D6D6D",
                                    "600": "#5D5D5D",
                                    "700": "#4C4C4C",
                                    "800": "#454545",
                                    "900": "#3D3D3D"
                                },
                                "blueGray": {
                                    "50": "#F4F6F7",
                                    "100": "#E4E7E9",
                                    "200": "#CBD1D6",
                                    "300": "#A7B0B9",
                                    "400": "#7B8795",
                                    "500": "#606C7A",
                                    "600": "#535B67",
                                    "700": "#474E57",
                                    "800": "#3F434B",
                                    "900": "#383C41"
                                }
                            },
                            "spacing": {
                                "0": "0px",
                                "1": "0.25rem",
                                "2": "0.5rem",
                                "3": "0.75rem",
                                "4": "1rem",
                                "5": "1.25rem",
                                "6": "1.5rem",
                                "7": "1.75rem",
                                "8": "2rem",
                                "9": "2.25rem",
                                "10": "2.5rem",
                                "11": "2.75rem",
                                "12": "3rem",
                                "14": "3.5rem",
                                "16": "4rem",
                                "20": "5rem",
                                "24": "6rem",
                                "28": "7rem",
                                "32": "8rem",
                                "36": "9rem",
                                "40": "10rem",
                                "44": "11rem",
                                "48": "12rem",
                                "52": "13rem",
                                "56": "14rem",
                                "60": "15rem",
                                "64": "16rem",
                                "72": "18rem",
                                "80": "20rem",
                                "96": "24rem",
                                "px": "1px",
                                "0.5": "0.125rem",
                                "1.5": "0.375rem",
                                "2.5": "0.625rem",
                                "3.5": "0.875rem"
                            },
                            "animation": {
                                "none": "none",
                                "spin": "spin 1s linear infinite",
                                "ping": "ping 1s cubic-bezier(0, 0, 0.2, 1) infinite",
                                "pulse": "pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite",
                                "bounce": "bounce 1s infinite"
                            },
                            "backdropBlur": (theme) => theme("blur"),
                            "backdropBrightness": (theme) => theme("brightness"),
                            "backdropContrast": (theme) => theme("contrast"),
                            "backdropGrayscale": (theme) => theme("grayscale"),
                            "backdropHueRotate": (theme) => theme("hueRotate"),
                            "backdropInvert": (theme) => theme("invert"),
                            "backdropOpacity": (theme) => theme("opacity"),
                            "backdropSaturate": (theme) => theme("saturate"),
                            "backdropSepia": (theme) => theme("sepia"),
                            "backgroundColor": theme => ({
            ...theme("colors"),
            body: "#0E0F11",
                }),
                                "backgroundImage": {
                                    "none": "none",
                                    "gradient-to-t": "linear-gradient(to top, var(--tw-gradient-stops))",
                                    "gradient-to-tr": "linear-gradient(to top right, var(--tw-gradient-stops))",
                                    "gradient-to-r": "linear-gradient(to right, var(--tw-gradient-stops))",
                                    "gradient-to-br": "linear-gradient(to bottom right, var(--tw-gradient-stops))",
                                    "gradient-to-b": "linear-gradient(to bottom, var(--tw-gradient-stops))",
                                    "gradient-to-bl": "linear-gradient(to bottom left, var(--tw-gradient-stops))",
                                    "gradient-to-l": "linear-gradient(to left, var(--tw-gradient-stops))",
                                    "gradient-to-tl": "linear-gradient(to top left, var(--tw-gradient-stops))",
                                    "gradient-radial-dark": "radial-gradient(72.20% 78.49% at 49.87% 50.10%, rgba(71, 80, 98, 0.26) 0%, rgba(137, 137, 137, 0.00) 100%)",
                                    "gradient-radial-dark-light": "radial-gradient(80.63% 80.22% at 52.97% 50.00%, rgba(71, 80, 98, 0.46) 0%, rgba(137, 137, 137, 0.00) 100%)",
                                    "gradient-radial-light": "radial-gradient(90.27% 103.98% at 73.03% 35.14%, rgba(232, 239, 254, 0.26) 0%, rgba(51, 56, 65, 0.13) 100%)",
                                    "gradient-radial-darker": "linear-gradient(180deg, #0E0F11 0%, rgba(14, 15, 17, 0.00) 100%)",
                                    "gradient-radial-darker3": "linear-gradient(0deg, #0E0F11 0%, rgba(14, 15, 17, 0.00) 100%)",
                                    "gradient-radial-darker2": "linear-gradient(270deg, #0E0F11 0%, rgba(14, 15, 17, 0.00) 100%)",
                                    "gradient-card": "linear-gradient(180deg, rgba(255, 255, 255, 0.00) 0%, rgba(0, 0, 0, 0.00) 6.77%, #000 100%)"
                                },
                                "backgroundOpacity": (theme) => theme("opacity"),
                                "backgroundPosition": {
                                    "bottom": "bottom",
                                    "center": "center",
                                    "left": "left",
                                    "left-bottom": "left bottom",
                                    "left-top": "left top",
                                    "right": "right",
                                    "right-bottom": "right bottom",
                                    "right-top": "right top",
                                    "top": "top"
                                },
                                "backgroundSize": {
                                    "auto": "auto",
                                    "cover": "cover",
                                    "contain": "contain"
                                },
                                "blur": {
                                    "0": "0",
                                    "none": "0",
                                    "sm": "4px",
                                    "DEFAULT": "8px",
                                    "md": "12px",
                                    "lg": "16px",
                                    "xl": "24px",
                                    "2xl": "40px",
                                    "3xl": "64px"
                                },
                                "brightness": {
                                    "0": "0",
                                    "50": ".5",
                                    "75": ".75",
                                    "90": ".9",
                                    "95": ".95",
                                    "100": "1",
                                    "105": "1.05",
                                    "110": "1.1",
                                    "125": "1.25",
                                    "150": "1.5",
                                    "200": "2"
                                },
                                "borderColor": (theme) => ({
                ...theme("colors"),
                DEFAULT: theme("colors.gray.200", "currentColor"),
                }),
                                "borderOpacity": (theme) => theme("opacity"),
                                "borderRadius": {
                                    "none": "0px",
                                    "sm": "0.125rem",
                                    "DEFAULT": "0.25rem",
                                    "md": "0.375rem",
                                    "lg": "0.5rem",
                                    "xl": "0.75rem",
                                    "2xl": "1rem",
                                    "3xl": "1.25rem",
                                    "4xl": "1.5rem",
                                    "5xl": "1.875rem",
                                    "6xl": "3.125rem",
                                    "7xl": "5rem",
                                    "full": "9999px"
                                },
                                "borderWidth": {
                                    "0": "0px",
                                    "2": "2px",
                                    "4": "4px",
                                    "8": "8px",
                                    "DEFAULT": "1px"
                                },
                                "boxShadow": {
                                    "sm": "0 1px 2px 0 rgba(0, 0, 0, 0.05)",
                                    "DEFAULT": "0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)",
                                    "md": "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)",
                                    "lg": "0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)",
                                    "xl": "0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)",
                                    "2xl": "0 25px 50px -12px rgba(0, 0, 0, 0.25)",
                                    "inner": "inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)",
                                    "none": "none"
                                },
                                "caretColor": (theme) => theme("colors"),
                                "contrast": {
                                    "0": "0",
                                    "50": ".5",
                                    "75": ".75",
                                    "100": "1",
                                    "125": "1.25",
                                    "150": "1.5",
                                    "200": "2"
                                },
                                "container": [],
                                "content": {
                                    "none": "none"
                                },
                                "cursor": {
                                    "auto": "auto",
                                    "default": "default",
                                    "pointer": "pointer",
                                    "wait": "wait",
                                    "text": "text",
                                    "move": "move",
                                    "help": "help",
                                    "not-allowed": "not-allowed"
                                },
                                "divideColor": (theme) => theme("borderColor"),
                                "divideOpacity": (theme) => theme("borderOpacity"),
                                "divideWidth": (theme) => theme("borderWidth"),
                                "dropShadow": {
                                    "sm": "0 1px 1px rgba(0,0,0,0.05)",
                                    "DEFAULT": [
                                        "0 1px 2px rgba(0, 0, 0, 0.1)",
                                        "0 1px 1px rgba(0, 0, 0, 0.06)"
                                    ],
                                    "md": [
                                        "0 4px 3px rgba(0, 0, 0, 0.07)",
                                        "0 2px 2px rgba(0, 0, 0, 0.06)"
                                    ],
                                    "lg": [
                                        "0 10px 8px rgba(0, 0, 0, 0.04)",
                                        "0 4px 3px rgba(0, 0, 0, 0.1)"
                                    ],
                                    "xl": [
                                        "0 20px 13px rgba(0, 0, 0, 0.03)",
                                        "0 8px 5px rgba(0, 0, 0, 0.08)"
                                    ],
                                    "2xl": "0 25px 25px rgba(0, 0, 0, 0.15)",
                                    "checkbox": "0px 4px 14px rgba(204, 255, 0, 0.30)",
                                    "none": "0 0 #0000"
                                },
                                "fill": {
                                    "current": "currentColor"
                                },
                                "grayscale": {
                                    "0": "0",
                                    "DEFAULT": "100%"
                                },
                                "hueRotate": {
                                    "0": "0deg",
                                    "15": "15deg",
                                    "30": "30deg",
                                    "60": "60deg",
                                    "90": "90deg",
                                    "180": "180deg",
                                    "-180": "-180deg",
                                    "-90": "-90deg",
                                    "-60": "-60deg",
                                    "-30": "-30deg",
                                    "-15": "-15deg"
                                },
                                "invert": {
                                    "0": "0",
                                    "DEFAULT": "100%"
                                },
                                "flex": {
                                    "1": "1 1 0%",
                                    "auto": "1 1 auto",
                                    "initial": "0 1 auto",
                                    "none": "none"
                                },
                                "flexGrow": {
                                    "0": "0",
                                    "DEFAULT": "1"
                                },
                                "flexShrink": {
                                    "0": "0",
                                    "DEFAULT": "1"
                                },
                                "fontFamily": {
                                    "body": [
                                        "\"Clash Grotesk\"",
                                        "ui-sans-serif",
                                        "system-ui",
                                        "-apple-system",
                                        "BlinkMacSystemFont",
                                        "\"Segoe UI\"",
                                        "Roboto",
                                        "\"Helvetica Neue\"",
                                        "Arial",
                                        "\"Noto Sans\"",
                                        "sans-serif",
                                        "\"Apple Color Emoji\"",
                                        "\"Segoe UI Emoji\"",
                                        "\"Segoe UI Symbol\"",
                                        "\"Noto Color Emoji\""
                                    ],
                                    "heading": [
                                        "\"Clash Grotesk\"",
                                        "ui-sans-serif",
                                        "system-ui",
                                        "-apple-system",
                                        "BlinkMacSystemFont",
                                        "\"Segoe UI\"",
                                        "Roboto",
                                        "\"Helvetica Neue\"",
                                        "Arial",
                                        "\"Noto Sans\"",
                                        "sans-serif",
                                        "\"Apple Color Emoji\"",
                                        "\"Segoe UI Emoji\"",
                                        "\"Segoe UI Symbol\"",
                                        "\"Noto Color Emoji\""
                                    ],
                                    "sans": [
                                        "ui-sans-serif",
                                        "system-ui",
                                        "-apple-system",
                                        "BlinkMacSystemFont",
                                        "\"Segoe UI\"",
                                        "Roboto",
                                        "\"Helvetica Neue\"",
                                        "Arial",
                                        "\"Noto Sans\"",
                                        "sans-serif",
                                        "\"Apple Color Emoji\"",
                                        "\"Segoe UI Emoji\"",
                                        "\"Segoe UI Symbol\"",
                                        "\"Noto Color Emoji\""
                                    ],
                                    "serif": [
                                        "ui-serif",
                                        "Georgia",
                                        "Cambria",
                                        "\"Times New Roman\"",
                                        "Times",
                                        "serif"
                                    ],
                                    "mono": [
                                        "ui-monospace",
                                        "SFMono-Regular",
                                        "Menlo",
                                        "Monaco",
                                        "Consolas",
                                        "\"Liberation Mono\"",
                                        "\"Courier New\"",
                                        "monospace"
                                    ]
                                },
                                "fontSize": {
                                    "xs": [
                                        "0.75rem",
                                        {
                                            "lineHeight": "1rem"
                                        }
                                    ],
                                    "sm": [
                                        "0.875rem",
                                        {
                                            "lineHeight": "1.25rem"
                                        }
                                    ],
                                    "base": [
                                        "1rem",
                                        {
                                            "lineHeight": "1.5rem"
                                        }
                                    ],
                                    "lg": [
                                        "1.125rem",
                                        {
                                            "lineHeight": "1.75rem"
                                        }
                                    ],
                                    "xl": [
                                        "1.25rem",
                                        {
                                            "lineHeight": "1.75rem"
                                        }
                                    ],
                                    "2xl": [
                                        "1.5rem",
                                        {
                                            "lineHeight": "2rem"
                                        }
                                    ],
                                    "3xl": [
                                        "2rem",
                                        {
                                            "lineHeight": "2.25rem"
                                        }
                                    ],
                                    "4xl": [
                                        "2.5rem",
                                        {
                                            "lineHeight": "2.5rem"
                                        }
                                    ],
                                    "5xl": [
                                        "3rem",
                                        {
                                            "lineHeight": "1"
                                        }
                                    ],
                                    "6xl": [
                                        "3.5rem",
                                        {
                                            "lineHeight": "1"
                                        }
                                    ],
                                    "7xl": [
                                        "3.875rem",
                                        {
                                            "lineHeight": "1"
                                        }
                                    ],
                                    "8xl": [
                                        "4.5rem",
                                        {
                                            "lineHeight": "1"
                                        }
                                    ],
                                    "9xl": [
                                        "5rem",
                                        {
                                            "lineHeight": "1"
                                        }
                                    ],
                                    "10xl": [
                                        "6rem",
                                        {
                                            "lineHeight": "1"
                                        }
                                    ]
                                },
                                "fontWeight": {
                                    "thin": "100",
                                    "extralight": "200",
                                    "light": "300",
                                    "normal": "400",
                                    "medium": "500",
                                    "semibold": "600",
                                    "bold": "700",
                                    "extrabold": "800",
                                    "black": "900"
                                },
                                "gap": (theme) => theme("spacing"),
                                "gradientColorStops": (theme) => theme("colors"),
                                "gridAutoColumns": {
                                    "auto": "auto",
                                    "min": "min-content",
                                    "max": "max-content",
                                    "fr": "minmax(0, 1fr)"
                                },
                                "gridAutoRows": {
                                    "auto": "auto",
                                    "min": "min-content",
                                    "max": "max-content",
                                    "fr": "minmax(0, 1fr)"
                                },
                                "gridColumn": {
                                    "auto": "auto",
                                    "span-1": "span 1 \/ span 1",
                                    "span-2": "span 2 \/ span 2",
                                    "span-3": "span 3 \/ span 3",
                                    "span-4": "span 4 \/ span 4",
                                    "span-5": "span 5 \/ span 5",
                                    "span-6": "span 6 \/ span 6",
                                    "span-7": "span 7 \/ span 7",
                                    "span-8": "span 8 \/ span 8",
                                    "span-9": "span 9 \/ span 9",
                                    "span-10": "span 10 \/ span 10",
                                    "span-11": "span 11 \/ span 11",
                                    "span-12": "span 12 \/ span 12",
                                    "span-full": "1 \/ -1"
                                },
                                "gridColumnEnd": {
                                    "1": "1",
                                    "2": "2",
                                    "3": "3",
                                    "4": "4",
                                    "5": "5",
                                    "6": "6",
                                    "7": "7",
                                    "8": "8",
                                    "9": "9",
                                    "10": "10",
                                    "11": "11",
                                    "12": "12",
                                    "13": "13",
                                    "auto": "auto"
                                },
                                "gridColumnStart": {
                                    "1": "1",
                                    "2": "2",
                                    "3": "3",
                                    "4": "4",
                                    "5": "5",
                                    "6": "6",
                                    "7": "7",
                                    "8": "8",
                                    "9": "9",
                                    "10": "10",
                                    "11": "11",
                                    "12": "12",
                                    "13": "13",
                                    "auto": "auto"
                                },
                                "gridRow": {
                                    "auto": "auto",
                                    "span-1": "span 1 \/ span 1",
                                    "span-2": "span 2 \/ span 2",
                                    "span-3": "span 3 \/ span 3",
                                    "span-4": "span 4 \/ span 4",
                                    "span-5": "span 5 \/ span 5",
                                    "span-6": "span 6 \/ span 6",
                                    "span-full": "1 \/ -1"
                                },
                                "gridRowStart": {
                                    "1": "1",
                                    "2": "2",
                                    "3": "3",
                                    "4": "4",
                                    "5": "5",
                                    "6": "6",
                                    "7": "7",
                                    "auto": "auto"
                                },
                                "gridRowEnd": {
                                    "1": "1",
                                    "2": "2",
                                    "3": "3",
                                    "4": "4",
                                    "5": "5",
                                    "6": "6",
                                    "7": "7",
                                    "auto": "auto"
                                },
                                "gridTemplateColumns": {
                                    "1": "repeat(1, minmax(0, 1fr))",
                                    "2": "repeat(2, minmax(0, 1fr))",
                                    "3": "repeat(3, minmax(0, 1fr))",
                                    "4": "repeat(4, minmax(0, 1fr))",
                                    "5": "repeat(5, minmax(0, 1fr))",
                                    "6": "repeat(6, minmax(0, 1fr))",
                                    "7": "repeat(7, minmax(0, 1fr))",
                                    "8": "repeat(8, minmax(0, 1fr))",
                                    "9": "repeat(9, minmax(0, 1fr))",
                                    "10": "repeat(10, minmax(0, 1fr))",
                                    "11": "repeat(11, minmax(0, 1fr))",
                                    "12": "repeat(12, minmax(0, 1fr))",
                                    "none": "none"
                                },
                                "gridTemplateRows": {
                                    "1": "repeat(1, minmax(0, 1fr))",
                                    "2": "repeat(2, minmax(0, 1fr))",
                                    "3": "repeat(3, minmax(0, 1fr))",
                                    "4": "repeat(4, minmax(0, 1fr))",
                                    "5": "repeat(5, minmax(0, 1fr))",
                                    "6": "repeat(6, minmax(0, 1fr))",
                                    "none": "none"
                                },
                                "height": (theme) => ({
                auto: "auto",
                ...theme("spacing"),
                "1\/2": "50%",
                "1\/3": "33.333333%",
                "2\/3": "66.666667%",
                "1\/4": "25%",
                "2\/4": "50%",
                "3\/4": "75%",
                "1\/5": "20%",
                "2\/5": "40%",
                "3\/5": "60%",
                "4\/5": "80%",
                "1\/6": "16.666667%",
                "2\/6": "33.333333%",
                "3\/6": "50%",
                "4\/6": "66.666667%",
                "5\/6": "83.333333%",
                full: "100%",
                screen: "100vh",
                }),
                                "inset": (theme, { negative }) => ({
                auto: "auto",
                ...theme("spacing"),
                ...negative(theme("spacing")),
                "1\/2": "50%",
                "1\/3": "33.333333%",
                "2\/3": "66.666667%",
                "1\/4": "25%",
                "2\/4": "50%",
                "3\/4": "75%",
                full: "100%",
                "-1\/2": "-50%",
                "-1\/3": "-33.333333%",
                "-2\/3": "-66.666667%",
                "-1\/4": "-25%",
                "-2\/4": "-50%",
                "-3\/4": "-75%",
                "-full": "-100%",
                }),
                                "keyframes": {
                                    "spin": {
                                        "to": {
                                            "transform": "rotate(360deg)"
                                        }
                                    },
                                    "ping": {
                                        "75%, 100%": {
                                            "transform": "scale(2)",
                                            "opacity": "0"
                                        }
                                    },
                                    "pulse": {
                                        "50%": {
                                            "opacity": ".5"
                                        }
                                    },
                                    "bounce": {
                                        "0%, 100%": {
                                            "transform": "translateY(-25%)",
                                            "animationTimingFunction": "cubic-bezier(0.8,0,1,1)"
                                        },
                                        "50%": {
                                            "transform": "none",
                                            "animationTimingFunction": "cubic-bezier(0,0,0.2,1)"
                                        }
                                    }
                                },
                                "letterSpacing": {
                                    "10xl": "-4.8px",
                                    "9xl": "-4px",
                                    "8xl": "-3.6px",
                                    "7xl": "-1.86px",
                                    "6xl": "-1.44px",
                                    "5xl": "-0.96px",
                                    "4xl": "-2px",
                                    "3xl": "-0.64px",
                                    "2xl": "-0.48px",
                                    "tighter": "-0.026em",
                                    "tight": "-0.02em",
                                    "normal": "0em",
                                    "wide": "0.025em",
                                    "wider": "0.05em",
                                    "widest": "0.1em"
                                },
                                "lineHeight": {
                                    "3": ".75rem",
                                    "4": "1rem",
                                    "5": "1.25rem",
                                    "6": "1.5rem",
                                    "7": "1.75rem",
                                    "8": "2rem",
                                    "9": "2.25rem",
                                    "10": "2.5rem",
                                    "none": "1",
                                    "tight": "1.25",
                                    "snug": "1.375",
                                    "normal": "1.5",
                                    "relaxed": "1.625",
                                    "loose": "2"
                                },
                                "listStyleType": {
                                    "none": "none",
                                    "disc": "disc",
                                    "decimal": "decimal"
                                },
                                "margin": (theme, { negative }) => ({
                auto: "auto",
                ...theme("spacing"),
                ...negative(theme("spacing")),
                }),
                                "maxHeight": (theme) => ({
                ...theme("spacing"),
                full: "100%",
                screen: "100vh",
                }),
                                "maxWidth": (theme, { breakpoints }) => ({
                none: "none",
                0: "0rem",
                xs: "20rem",
                sm: "24rem",
                md: "28rem",
                lg: "32rem",
                xl: "36rem",
                "2xl": "42rem",
                "3xl": "48rem",
                "4xl": "56rem",
                "5xl": "64rem",
                "6xl": "72rem",
                "7xl": "80rem",
                full: "100%",
                min: "min-content",
                max: "max-content",
                prose: "65ch",
                ...breakpoints(theme("screens")),
                }),
                                "minHeight": {
                                    "0": "0px",
                                    "full": "100%",
                                    "screen": "100vh"
                                },
                                "minWidth": {
                                    "0": "0px",
                                    "full": "100%",
                                    "min": "min-content",
                                    "max": "max-content"
                                },
                                "objectPosition": {
                                    "bottom": "bottom",
                                    "center": "center",
                                    "left": "left",
                                    "left-bottom": "left bottom",
                                    "left-top": "left top",
                                    "right": "right",
                                    "right-bottom": "right bottom",
                                    "right-top": "right top",
                                    "top": "top"
                                },
                                "opacity": {
                                    "0": "0",
                                    "5": "0.05",
                                    "10": "0.1",
                                    "20": "0.2",
                                    "25": "0.25",
                                    "30": "0.3",
                                    "40": "0.4",
                                    "50": "0.5",
                                    "60": "0.6",
                                    "70": "0.7",
                                    "75": "0.75",
                                    "80": "0.8",
                                    "90": "0.9",
                                    "95": "0.95",
                                    "100": "1"
                                },
                                "order": {
                                    "1": "1",
                                    "2": "2",
                                    "3": "3",
                                    "4": "4",
                                    "5": "5",
                                    "6": "6",
                                    "7": "7",
                                    "8": "8",
                                    "9": "9",
                                    "10": "10",
                                    "11": "11",
                                    "12": "12",
                                    "first": "-9999",
                                    "last": "9999",
                                    "none": "0"
                                },
                                "outline": {
                                    "none": [
                                        "2px solid transparent",
                                        "2px"
                                    ],
                                    "white": [
                                        "2px dotted white",
                                        "2px"
                                    ],
                                    "black": [
                                        "2px dotted black",
                                        "2px"
                                    ]
                                },
                                "padding": (theme) => theme("spacing"),
                                "placeholderColor": (theme) => theme("colors"),
                                "placeholderOpacity": (theme) => theme("opacity"),
                                "ringColor": (theme) => ({
                DEFAULT: theme("colors.blue.500", "#3b82f6"),
                ...theme("colors"),
                }),
                                "ringOffsetColor": (theme) => theme("colors"),
                                "ringOffsetWidth": {
                                    "0": "0px",
                                    "1": "1px",
                                    "2": "2px",
                                    "4": "4px",
                                    "8": "8px"
                                },
                                "ringOpacity": (theme) => ({
                DEFAULT: "0.5",
                ...theme("opacity"),
                }),
                                "ringWidth": {
                                    "0": "0px",
                                    "1": "1px",
                                    "2": "2px",
                                    "4": "4px",
                                    "8": "8px",
                                    "DEFAULT": "3px"
                                },
                                "rotate": {
                                    "0": "0deg",
                                    "1": "1deg",
                                    "2": "2deg",
                                    "3": "3deg",
                                    "6": "6deg",
                                    "12": "12deg",
                                    "45": "45deg",
                                    "90": "90deg",
                                    "180": "180deg",
                                    "-180": "-180deg",
                                    "-90": "-90deg",
                                    "-45": "-45deg",
                                    "-12": "-12deg",
                                    "-6": "-6deg",
                                    "-3": "-3deg",
                                    "-2": "-2deg",
                                    "-1": "-1deg"
                                },
                                "saturate": {
                                    "0": "0",
                                    "50": ".5",
                                    "100": "1",
                                    "150": "1.5",
                                    "200": "2"
                                },
                                "scale": {
                                    "0": "0",
                                    "50": ".5",
                                    "75": ".75",
                                    "90": ".9",
                                    "95": ".95",
                                    "100": "1",
                                    "105": "1.05",
                                    "110": "1.1",
                                    "125": "1.25",
                                    "150": "1.5"
                                },
                                "sepia": {
                                    "0": "0",
                                    "DEFAULT": "100%"
                                },
                                "skew": {
                                    "0": "0deg",
                                    "1": "1deg",
                                    "2": "2deg",
                                    "3": "3deg",
                                    "6": "6deg",
                                    "12": "12deg",
                                    "-12": "-12deg",
                                    "-6": "-6deg",
                                    "-3": "-3deg",
                                    "-2": "-2deg",
                                    "-1": "-1deg"
                                },
                                "space": (theme, { negative }) => ({
                ...theme("spacing"),
                ...negative(theme("spacing")),
                }),
                                "stroke": {
                                    "current": "currentColor"
                                },
                                "strokeWidth": [
                                    "0",
                                    "1",
                                    "2"
                                ],
                                "textColor": theme => ({
                ...theme("colors"),
                body: "#fff",
                }),
                                "textOpacity": (theme) => theme("opacity"),
                                "transformOrigin": {
                                    "center": "center",
                                    "top": "top",
                                    "top-right": "top right",
                                    "right": "right",
                                    "bottom-right": "bottom right",
                                    "bottom": "bottom",
                                    "bottom-left": "bottom left",
                                    "left": "left",
                                    "top-left": "top left"
                                },
                                "transitionDelay": {
                                    "75": "75ms",
                                    "100": "100ms",
                                    "150": "150ms",
                                    "200": "200ms",
                                    "300": "300ms",
                                    "500": "500ms",
                                    "700": "700ms",
                                    "1000": "1000ms"
                                },
                                "transitionDuration": {
                                    "75": "75ms",
                                    "100": "100ms",
                                    "150": "150ms",
                                    "200": "200ms",
                                    "300": "300ms",
                                    "500": "500ms",
                                    "700": "700ms",
                                    "1000": "1000ms",
                                    "DEFAULT": "150ms"
                                },
                                "transitionProperty": {
                                    "none": "none",
                                    "all": "all",
                                    "DEFAULT": "background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter",
                                    "colors": "background-color, border-color, color, fill, stroke",
                                    "opacity": "opacity",
                                    "shadow": "box-shadow",
                                    "transform": "transform"
                                },
                                "transitionTimingFunction": {
                                    "DEFAULT": "cubic-bezier(0.4, 0, 0.2, 1)",
                                    "linear": "linear",
                                    "in": "cubic-bezier(0.4, 0, 1, 1)",
                                    "out": "cubic-bezier(0, 0, 0.2, 1)",
                                    "in-out": "cubic-bezier(0.4, 0, 0.2, 1)"
                                },
                                "translate": (theme, { negative }) => ({
                ...theme("spacing"),
                ...negative(theme("spacing")),
                "1\/2": "50%",
                "1\/3": "33.333333%",
                "2\/3": "66.666667%",
                "1\/4": "25%",
                "2\/4": "50%",
                "3\/4": "75%",
                full: "100%",
                "-1\/2": "-50%",
                "-1\/3": "-33.333333%",
                "-2\/3": "-66.666667%",
                "-1\/4": "-25%",
                "-2\/4": "-50%",
                "-3\/4": "-75%",
                "-full": "-100%",
                }),
                                "width": (theme) => ({
                auto: "auto",
                ...theme("spacing"),
                "1\/2": "50%",
                "1\/3": "33.333333%",
                "2\/3": "66.666667%",
                "1\/4": "25%",
                "2\/4": "50%",
                "3\/4": "75%",
                "1\/5": "20%",
                "2\/5": "40%",
                "3\/5": "60%",
                "4\/5": "80%",
                "1\/6": "16.666667%",
                "2\/6": "33.333333%",
                "3\/6": "50%",
                "4\/6": "66.666667%",
                "5\/6": "83.333333%",
                "1\/12": "8.333333%",
                "2\/12": "16.666667%",
                "3\/12": "25%",
                "4\/12": "33.333333%",
                "5\/12": "41.666667%",
                "6\/12": "50%",
                "7\/12": "58.333333%",
                "8\/12": "66.666667%",
                "9\/12": "75%",
                "10\/12": "83.333333%",
                "11\/12": "91.666667%",
                full: "100%",
                screen: "100vw",
                min: "min-content",
                max: "max-content",
                }),
                                "zIndex": {
                                    "0": "0",
                                    "10": "10",
                                    "20": "20",
                                    "30": "30",
                                    "40": "40",
                                    "50": "50",
                                    "auto": "auto"
                                }
                            }
                        }
                    }
                ],
            };
        </script>
        <link rel="icon" sizes="32x32" href="logo.ico"/>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js" defer="defer"></script>
    </head>
    <body class="antialiased bg-body text-body font-body">
        <div>
            <section class="relative overflow-hidden" x-data="{ mobileNavOpen: false }">
                <div class="container px-4 mx-auto">
                    <div class="flex items-center justify-between pt-6 -m-2">
                        <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center">
                                <div class="w-auto"><a class="relative z-10 inline-block" href="index.php"><img class="h-[50px]" src="images/logo.png" alt=""/></a></div>
                            </div>
                        </div>
                        <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center">
                                <div class="w-auto hidden lg:block">
                                    <ul class="flex items-center mr-12">
                                        <li class="mr-12 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="affiliate.php">Our Offers</a></li>
                                        <!-- <li class="mr-12 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="pricing.html">Pricing</a></li>
                                        <li class="mr-12 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="blog.html">Blog</a></li> -->
                                        <li class="text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- <div class="w-auto hidden lg:block">
                                    <div class="inline-block"><a class="inline-block px-8 py-4 text-white hover:text-black tracking-tighter hover:bg-green-400 border-2 border-white focus:border-green-400 focus:border-opacity-40 hover:border-green-400 focus:ring-4 focus:ring-green-400 focus:ring-opacity-40 rounded-full transition duration-300" href="login.html">Login</a></div>
                                </div> -->
                                <div class="w-auto lg:hidden">
                                    <button class="relative z-10 inline-block" x-on:click="mobileNavOpen = !mobileNavOpen">
                                        <svg class="text-green-500" width="51" height="51" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="56" height="56" rx="28" fill="currentColor"></rect>
                                        <path d="M37 32H19M37 24H19" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden fixed top-0 left-0 bottom-0 w-4/6 sm:max-w-xs z-50" :class="{'block': mobileNavOpen, 'hidden': !mobileNavOpen}">
                    <div class="fixed inset-0 bg-black opacity-60" x-on:click="mobileNavOpen = !mobileNavOpen"></div>
                    <nav class="relative z-10 px-9 pt-8 h-full bg-black overflow-y-auto">
                        <div class="flex flex-wrap justify-between h-full">
                            <div class="w-full">
                                <div class="flex items-center justify-between -m-2">
                                <div class="w-auto p-2"><a class="inline-block" href="index.php"><img class="h-[50px]" src="images/logo.png" alt=""/></div>
                                <div class="w-auto p-2">
                                    <button class="inline-block text-white" x-on:click="mobileNavOpen = !mobileNavOpen">
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-center py-16 w-full">
                                <ul>
                                    <li class="mb-8 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="affiliate.php">Our Offers</a></li>
                                    <!-- <li class="mb-8 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="pricing.html">Pricing</a></li>
                                    <li class="mb-8 text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="blog.html">Blog</a></li> -->
                                    <li class="text-white font-medium hover:text-opacity-90 tracking-tighter"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                            <!-- <div class="flex flex-col justify-end w-full pb-8"><a class="inline-block px-8 py-4 text-center text-white hover:text-black tracking-tighter hover:bg-green-400 border-2 border-white focus:border-green-400 focus:border-opacity-40 hover:border-green-400 focus:ring-4 focus:ring-green-400 focus:ring-opacity-40 rounded-full transition duration-300" href="login.html">Login</a></div> -->
                        </div>
                    </nav>
                </div>
                <div class="relative pt-20 lg:pt-28">
                    <div class="relative z-10 container px-4 mx-auto">
                        <div class="relative mb-24 text-center md:max-w-4xl mx-auto">
                            <img class="absolute top-44 -left-36" src="template-assets/images/headers/star2.svg" alt=""/>
                            <img class="absolute top-10 -right-36" src="template-assets/images/headers/star2.svg" alt=""/>
                            <!-- <span class="inline-block mb-2.5 text-sm text-green-400 font-medium tracking-tighter">Responsive Website</span> -->
                            <h1 class="font-heading mb-4 text-7xl lg:text-8xl xl:text-10xl text-white tracking-tighter">Ignite Your Future. Elevate Your Soul.</h1>
                            <p class="text-2xl text-center pb-8">Empowering lives through transformative digital and physical products that spark real, lasting change.</p>
                        </div>
                        <div class="relative max-w-max mx-auto">
                            <!-- <img src="template-assets/images/headers/card-half.png" alt=""/> -->
                            <img class="absolute top-7 -right-64" src="template-assets/images/headers/star.svg" alt=""/>
                        </div>
                    </div>
                </div>
                <img class="absolute top-0 left-48" src="template-assets/images/headers/layer-blur.svg" alt=""/>
                <img class="absolute bottom-0 right-0" src="template-assets/images/headers/lines2.svg" alt=""/>
            </section>
            <!-- <section class="py-24 bg-blueGray-950">
                <div class="container px-4 mx-auto">
                    <div class="text-center"><span class="inline-block mb-4 text-sm text-green-400 font-medium tracking-tighter">About us</span>
                        <h2 class="font-heading mb-6 text-7xl lg:text-8xl text-white tracking-8xl md:max-w-md mx-auto">We Are Ignite Vision Media</h2>
                        <p class="mb-20 text-gray-300 md:max-w-md mx-auto">At Ignite Vision Media, we don’t just publish — we empower. We are a performance-driven digital publishing company specializing in high-converting personal development products that deliver real-world transformation. Whether it’s spiritual growth, mental clarity, or unlocking inner wealth, our mission is simple: <b>To help people live better, think deeper, and rise higher. </b></p>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                        <div class="relative mb-8 overflow-hidden rounded-5xl"><img class="w-full transform hover:scale-125 transition duration-1000" src="template-assets/images/cards/bg-image1.png" alt=""/>
                            <div class="absolute bottom-0 left-0 w-full bg-gradient-card p-8"><span class="inline-block mb-4 text-sm text-green-400 font-medium tracking-tighter">Features</span>                  <a class="group inline-block max-w-sm" href="#">
                                <h3 class="mb-4 text-3xl text-white tracking-3xl hover:underline">Sed ut perspiciatis unde omnis iste natus</h3></a>                  <a class="group inline-flex items-center" href="#"><span class="mr-3.5 text-white font-medium">Learn more</span>
                                <svg class="transform group-hover:rotate-90 transition duration-300" width="13" height="12" viewbox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 0.75L1 11.25" stroke="white" stroke-width="1.43182" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M11.5 10.3781V0.75H1.87187" stroke="white" stroke-width="1.43182" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></a></div>
                        </div>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                        <div class="relative mb-8 overflow-hidden rounded-5xl"><img class="w-full transform hover:scale-125 transition duration-1000" src="template-assets/images/cards/bg-image2.png" alt=""/>
                            <div class="absolute bottom-0 left-0 w-full bg-gradient-card p-8"><span class="inline-block mb-4 text-sm text-green-400 font-medium tracking-tighter">Security</span>                  <a class="group inline-block max-w-sm" href="#">
                                <h3 class="mb-4 text-3xl text-white tracking-3xl hover:underline">Sed ut perspiciatis unde omnis iste natus</h3></a>                  <a class="group inline-flex items-center" href="#"><span class="mr-3.5 text-white font-medium">Learn more</span>
                                <svg class="transform group-hover:rotate-90 transition duration-300" width="13" height="12" viewbox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 0.75L1 11.25" stroke="white" stroke-width="1.43182" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M11.5 10.3781V0.75H1.87187" stroke="white" stroke-width="1.43182" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></a></div>
                        </div>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                        <div class="relative mb-8 overflow-hidden rounded-5xl"><img class="w-full transform hover:scale-125 transition duration-1000" src="template-assets/images/cards/bg-image3.png" alt=""/>
                            <div class="absolute bottom-0 left-0 w-full bg-gradient-card p-8"><span class="inline-block mb-4 text-sm text-green-400 font-medium tracking-tighter">Progress</span>                  <a class="group inline-block max-w-sm" href="#">
                                <h3 class="mb-4 text-3xl text-white tracking-3xl hover:underline">Sed ut perspiciatis unde omnis iste natus</h3></a>                  <a class="group inline-flex items-center" href="#"><span class="mr-3.5 text-white font-medium">Learn more</span>
                                <svg class="transform group-hover:rotate-90 transition duration-300" width="13" height="12" viewbox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 0.75L1 11.25" stroke="white" stroke-width="1.43182" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M11.5 10.3781V0.75H1.87187" stroke="white" stroke-width="1.43182" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></a></div>
                        </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <section class="relative py-24 overflow-hidden">
                <div class="container px-4 mx-auto">
                    <div class="text-center">
                        <span class="inline-block mb-4 text-2xl text-green-400 font-medium tracking-tighter">About us</span>
                        <h2 class="font-heading mb-6 text-7xl lg:text-8xl text-white tracking-8xl md:max-w-md mx-auto">We Are Ignite Vision Media</h2>
                        <p class="mb-20 text-gray-300 md:max-w-md mx-auto text-justify">
                            At Ignite Vision Media, we don’t just publish — we empower.
                            We are a performance-driven digital publishing company specializing in high-converting personal development products that deliver real-world transformation. Whether it’s spiritual growth, mental clarity, or unlocking inner wealth, our mission is simple:
                            <b>To help people live better, think deeper, and rise higher.</b>
                        </p>
                    </div>
                <!-- <div class="mb-20 md:max-w-xl text-center mx-auto"><span class="inline-block mb-4 text-sm text-green-400 font-medium tracking-tighter">Our Business</span>
                    <h2 class="font-heading text-7xl lg:text-8xl text-white tracking-tighter-xl">Features</h2>
                </div> -->
                <!-- <div class="relative mb-10 py-20 px-16 bg-gradient-radial-dark overflow-hidden border border-gray-900 border-opacity-30 rounded-5xl">
                    <div class="max-w-6xl mx-auto">
                    <div class="relative z-10 flex flex-wrap items-center -m-8">
                        <div class="w-full md:w-1/2 p-8">
                        <div class="max-w-md mx-auto text-center">
                            <h2 class="mb-6 text-7xl text-white tracking-tighter-xl">We Create. We Market. We Transform.</h2>
                            <p class="text-white text-opacity-60">We're not your average publishing house. We’re a team of creators, marketers, and visionaries who launch direct response products that captivate, convert, and change lives.</p>
                        </div>
                        </div>
                        <div class="w-full md:w-1/2 p-8"><img class="mx-auto md:mr-0" src="template-assets/images/features/dashboard.png" alt=""/></div>
                    </div>
                    </div><img class="absolute bottom-0 left-0" src="template-assets/images/features/bg-gray.png" alt=""/>
                </div> -->
                <div class="relative mb-10 py-20 px-16 bg-gradient-radial-dark overflow-hidden border border-gray-900 border-opacity-30 rounded-5xl">
                    <div class="max-w-6xl mx-auto">
                        <div class="relative z-10 flex flex-wrap items-center -m-8">
                            <div class="w-full p-8">
                                <div class="max-w-md mx-auto text-center">
                                    <span class="inline-block mb-4 text-2xl text-green-400 font-medium tracking-tighter">Our Business</span>
                                    <h2 class="mb-6 text-7xl text-white tracking-tighter-xl">We Create. We Market. We Transform.</h2>
                                    <p class="text-white text-opacity-60">We're not your average publishing house. We’re a team of creators, marketers, and visionaries who launch direct response products that captivate, convert, and change lives.</p>
                                </div>
                            </div>
                            <!-- <div class="w-full md:w-1/2 p-8"><img class="mx-auto md:mr-0" src="template-assets/images/features/dashboard.png" alt=""/></div> -->
                        </div>
                    </div><img class="absolute bottom-0 left-0" src="template-assets/images/features/bg-gray.png" alt=""/>
                </div>
                <div class="flex flex-wrap -m-5">
                    <div class="w-full md:w-1/2 p-5">
                        <div class="relative px-16 pt-14 pb-16 h-full bg-gradient-radial-dark overflow-hidden border border-gray-900 border-opacity-30 rounded-5xl">
                            <!--img class="mb-14" src="template-assets/images/features/cards.png" alt=""-->
                            <div class="relative z-10 max-w-sm text-center mx-auto">
                            <h2 class="mb-6 text-7xl text-white tracking-tighter">Info-Products That Deliver</h2>
                            <p class="text-white text-opacity-60">From soul-stirring eBooks to audio frequencies that tune your mind for success — we build products that people love and come back for.</p>
                            </div><img class="absolute bottom-0 right-0" src="template-assets/images/features/bg-gray-2.png" alt="">
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-5">
                        <div class="relative px-16 pt-14 pb-16 h-full bg-gradient-radial-dark overflow-hidden border border-gray-900 border-opacity-30 rounded-5xl">
                            <!-- <div class="mb-14 max-w-sm mx-auto">
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-auto p-2">
                                    <div class="flex items-center justify-center w-24 h-24 bg-gradient-radial-dark border border-gray-900 border-opacity-30 rounded-5xl"><img src="template-assets/logos/brands/figma.svg" alt=""></div>
                                    </div>
                                    <div class="w-auto p-2">
                                    <div class="flex items-center justify-center w-24 h-24 bg-gradient-radial-dark border border-gray-900 border-opacity-30 rounded-5xl"><img src="template-assets/logos/brands/notion.svg" alt=""></div>
                                    </div>
                                    <div class="w-auto p-2">
                                    <div class="flex items-center justify-center w-24 h-24 bg-gradient-radial-dark border border-gray-900 border-opacity-30 rounded-5xl"><img src="template-assets/logos/brands/slack.svg" alt=""></div>
                                    </div>
                                    <div class="w-auto p-2">
                                    <div class="flex items-center justify-center w-24 h-24 bg-gradient-radial-dark border border-gray-900 border-opacity-30 rounded-5xl"><img src="template-assets/logos/brands/spotify.svg" alt=""></div>
                                    </div>
                                    <div class="w-auto p-2">
                                    <div class="flex items-center justify-center w-24 h-24 bg-gradient-radial-dark border border-gray-900 border-opacity-30 rounded-5xl"><img src="template-assets/logos/brands/twitter.svg" alt=""></div>
                                    </div>
                                    <div class="w-auto p-2">
                                    <div class="flex items-center justify-center w-24 h-24 bg-gradient-radial-dark border border-gray-900 border-opacity-30 rounded-5xl"><img src="template-assets/logos/brands/desktop.svg" alt=""></div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="relative z-10 max-w-sm text-center mx-auto">
                                <h2 class="mb-6 text-7xl text-white tracking-tighter">Marketing Masters</h2>
                                <p class="text-white text-opacity-60">We don’t rely on others to spread the message. Our in-house marketing team dominates the digital space with Facebook, YouTube, and other social platforms.</p>
                                </div><img class="absolute bottom-0 right-0" src="template-assets/images/features/bg-gray-2.png" alt="">
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-5">
                        <div class="relative px-16 pt-14 pb-16 h-full bg-gradient-radial-dark overflow-hidden border border-gray-900 border-opacity-30 rounded-5xl">
                            <!-- <img class="mb-14" src="template-assets/images/features/cards.png" alt=""> -->
                            <div class="relative z-10 max-w-sm text-center mx-auto">
                            <h2 class="mb-6 text-7xl text-white tracking-tighter">Optimized Sales Funnels</h2>
                            <p class="text-white text-opacity-60">We craft sleek, persuasive websites and funnels that sell — 24/7.</p>
                            </div><img class="absolute bottom-0 right-0" src="template-assets/images/features/bg-gray-2.png" alt="">
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-5">
                        <div class="relative px-16 pt-14 pb-16 h-full bg-gradient-radial-dark overflow-hidden border border-gray-900 border-opacity-30 rounded-5xl">
                            <!-- <img class="mb-14" src="template-assets/images/features/cards.png" alt=""> -->
                            <div class="relative z-10 max-w-sm text-center mx-auto">
                            <h2 class="mb-6 text-7xl text-white tracking-tighter">Digital &amp; Physical</h2>
                            <p class="text-white text-opacity-60">Whether delivered to your inbox or your doorstep, our products reach people where they are.</p>
                            </div><img class="absolute bottom-0 right-0" src="template-assets/images/features/bg-gray-2.png" alt="">
                        </div>
                    </div>    
                </div>
            </section>
            <section class="relative py-24 overflow-hidden">
                <div class="container px-4 mx-auto">
                    <div class="flex flex-wrap items-center -m-8">
                        <div class="w-full md:w-1/2 p-8">
                            <div class="relative z-10 md:max-w-md">
                                <span class="inline-block mb-4 text-2xl text-green-400 font-medium tracking-tighter">Our Purpose</span>
                                <h2 class="font-heading mb-6 text-6xl md:text-7xl text-white tracking-tighter-xl">What We Do</h2>
                                <p class="text-white text-opacity-60 text-justify">At <b>Ignite Vision Media,</b> we specialize in launching direct response digital and physical products in the personal development niche. We build our own brands, own our own platforms, and control the customer experience from start to finish.</p>
                                <p class="mb-8 mt-4 text-white text-opacity-60">From <b> conception to conversion,</b> we do it all:</p>
                                <ul class="grid">
                                    <li class="inline-flex mb-3.5"><img class="mr-3.5" src="template-assets/images/features/checked.svg" alt=""/><span class="text-white">Product ideation & development</span></li>
                                    <li class="inline-flex mb-3.5"><img class="mr-3.5" src="template-assets/images/features/checked.svg" alt=""/><span class="text-white">Website and funnel design</span></li>
                                    <li class="inline-flex mb-3.5"><img class="mr-3.5" src="template-assets/images/features/checked.svg" alt=""/><span class="text-white">Paid traffic strategies (Meta, YouTube, etc.)</span></li>
                                    <li class="inline-flex"><img class="mr-3.5" src="template-assets/images/features/checked.svg" alt=""/><span class="text-white">Customer delivery and ongoing engagement</span></li>
                                </ul>
                                <p class="mt-8 text-white text-opacity-60 text-justify">Our portfolio includes eBooks, guided audios, manifestation tools, digital courses, apps, and physical items like faith-based jewelry and wellness kits.</p>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-8"><img class="mx-auto rounded-lg" src="template-assets/images/our-purpose.jpg" alt=""/></div>
                    </div>
                </div><img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" src="template-assets/images/features/bg-blur.png" alt=""/>
            </section>
            <section class="relative py-24 overflow-hidden" x-data="{ showContent: false }">
                <div class="container px-4 mx-auto">
                    <div class="flex flex-wrap items-center -m-8">
                        <div class="w-full md:w-1/2 p-8">
                            <div class="md:max-w-md">
                                <span class="inline-block mb-4 text-2xl text-green-400 font-medium tracking-tighter">Our Mission</span>
                                <h2 class="font-heading mb-6 text-6xl md:text-7xl text-white tracking-8xl mx-auto">To Inspire, Empower, and Elevate.</h2>
                                <p class="mb-20 text-gray-300 mx-auto text-justify">Our mission is to positively impact lives — spiritually, emotionally, and physically — through high-quality, meaningful products that work. We believe everyone has the power to rise above their circumstances and tap into something greater. We’re here to <b>ignite that spark.</b></p>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 p-8"><img class="mx-auto rounded-lg" src="template-assets/images/our-mission.png" alt=""/></div>
                    </div>
                </div>
            </section>
            <!-- <section class="relative py-24 overflow-hidden" x-data="{ active: 'introduction' }">
                <div class="container px-4 mx-auto">
                <div class="mb-12 md:max-w-4xl text-center mx-auto"><span class="inline-block mb-4 text-sm text-green-400 font-medium tracking-tighter">More about our features</span>
                    <h2 class="font-heading text-7xl lg:text-8xl text-white tracking-tighter-xl">Billing infrastucture that keeps up with your business</h2>
                </div>
                <ul class="mb-20 flex flex-wrap justify-center">
                    <li><a class="inline-block px-5 py-5 font-medium text-green-300 tracking-tighter border border-green-400 rounded-full transition duration-200" x-on:click.prevent="active = 'introduction'" :class="{'text-green-400 border-green-400': active === 'introduction', 'text-gray-300 border-transparent': active !== 'introduction'}" href="#">Introduction</a></li>
                    <li><a class="inline-block px-5 py-5 font-medium text-gray-300 tracking-tighter border border-transparent rounded-full transition duration-200" x-on:click.prevent="active = 'aggregation'" :class="{'text-green-400 border-green-400': active === 'aggregation', 'text-gray-300 border-transparent': active !== 'aggregation'}" href="#">Aggregation</a></li>
                    <li><a class="inline-block px-5 py-5 font-medium text-gray-300 tracking-tighter border border-transparent rounded-full transition duration-200" x-on:click.prevent="active = 'pricing'" :class="{'text-green-400 border-green-400': active === 'pricing', 'text-gray-300 border-transparent': active !== 'pricing'}" href="#">Pricing & Credits</a></li>
                    <li><a class="inline-block px-5 py-5 font-medium text-gray-300 tracking-tighter border border-transparent rounded-full transition duration-200" x-on:click.prevent="active = 'integrations'" :class="{'text-green-400 border-green-400': active === 'integrations', 'text-gray-300 border-transparent': active !== 'integrations'}" href="#">Integrations</a></li>
                    <li><a class="inline-block px-5 py-5 font-medium text-gray-300 tracking-tighter border border-transparent rounded-full transition duration-200" x-on:click.prevent="active = 'api'" :class="{'text-green-400 border-green-400': active === 'api', 'text-gray-300 border-transparent': active !== 'api'}" href="#">API & Webhooks</a></li>
                </ul><img class="mx-auto" :class="{ 'hidden': active != 'introduction' }" src="template-assets/images/features/dashboard2.png" alt=""/><img class="hidden mx-auto" :class="{ 'hidden': active != 'aggregation' }" src="template-assets/images/features/dashboard3.png" alt=""/><img class="hidden mx-auto" :class="{ 'hidden': active != 'pricing' }" src="template-assets/images/features/dashboard2.png" alt=""/><img class="hidden mx-auto" :class="{ 'hidden': active != 'integrations' }" src="template-assets/images/features/dashboard3.png" alt=""/><img class="hidden mx-auto" :class="{ 'hidden': active != 'api' }" src="template-assets/images/features/dashboard2.png" alt=""/>
                </div>
            </section> -->
            <!-- <section class="py-12">
                <div class="container px-4 mx-auto">
                    <div class="relative pt-20 px-4 bg-gray-900 bg-opacity-20 overflow-hidden rounded-6xl">
                        <div class="text-center md:max-w-xl mx-auto removed pb-20"><span class="inline-block mb-4 text-sm text-green-400 font-medium tracking-tighter">Learn to code</span>
                            <h2 class="font-heading mb-6 text-7xl text-white tracking-8xl">Want to build templates like this one?</h2><a class="mb-8 text-gray-300 relative z-10" href="contact.php">Contact us and learn to become a frontend web developer today</a><img class="absolute -bottom-24 right-0 z-0" src="template-assets/images/application-section/lines2.png" alt=""/>
                        </div>
                    </div>
                </div>
            </section> -->
        </div>

        <footer class="bg-gray-100 py-8 text-center text-sm text-gray-500">
    <div class="mx-auto md:w-8/12">
        <div class="grid grid-cols-1 md:grid-cols-4 mt-8">
            <p class="border-r-2 border-r-gray-500">
                <a href="/content/privacy-policy.php" target="_blank" class="text-blue-600 hover:underline">Privacy Policy</a>
            </p>
            <p class="border-r-2 border-r-gray-500">
                <a href="/content/terms-conditions.php" target="_blank" class="text-blue-600 hover:underline">Terms & Conditions</a>
            </p>
            <p class="border-r-2 border-r-gray-500">
                <a href="mailto:admin@ignitevisionmedia.com" class="text-blue-600 hover:underline">Contact Us</a>
            </p>
            <p>
                <a href="/content/refund-return-policy.php" target="_blank" class="text-blue-600 hover:underline">Refund & Return Policy</a>
            </p>
        </div>
        <div class="py-4">
            <!--Copyright &copy; 2025 Ignite Vision Media. All Right Reserved.-->
            <p>© Copyright Ignitist Pte Ltd.</p>
            <p>CRN: 201931552E. All Rights Reserved.</p>
        </div>
    </div>
</footer>    </body>
</html>