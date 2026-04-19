## Theme developing
To get started with developing Mroya WordPress theme, follow these steps:

### Prerequisites
Ensure you have the following tools installed:

- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/) (comes with Node.js)

### Setup

#### 1. Download or clone this repository
You'll want to add it to your local WordPress `wp-content/themes/` directory.

```sh
git clone https://github.com/uladzimirkulesh/mroya.git
cd mroya
```

#### 2. Install dependencies
Run `npm run setup` to install all necessary development dependencies.

#### 3. Set up Webpack config
Set up your proxy in BrowserSync options in webpack.config.js

### Available scripts
In the project directory, you can run the following scripts:

#### 1. start
Run `npm run start` to transform your code according the configuration provided so it’s ready for development. The script will automatically rebuild if you make changes to the code, and you will see the build errors in the console.

#### 2. build
Run `npm run build` to transform your code for production.

#### 3. lint:css
Run `npm run lint:css` to enforce coding style guidelines for your style files.

#### 4. lint:js
Run `npm run lint:js` to enforce coding style guidelines for your JavaScript files.

#### 5. format
Run `npm run format` to enforce coding style guidelines for your JavaScript files.

#### 6. check-engines
Run `npm run check-engines` to checks if the current node, npm versions match the given semantic version ranges.

#### 7. packages-update
Run `npm run packages-update` to update the WordPress packages used in the project to their latest version.
