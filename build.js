import * as esbuild from 'esbuild';
import { sassPlugin } from 'esbuild-sass-plugin';
import { watch } from 'fs';

const isWatch = process.argv.includes('--watch');

const scss = sassPlugin();

const sharedOptions = {
  bundle: true,
  plugins: [scss],
  loader: {
    '.woff': 'copy',
    '.woff2': 'copy',
    '.ttf': 'copy',
    '.eot': 'copy',
    '.svg': 'copy',
    '.png': 'copy',
    '.jpg': 'copy',
    '.webp': 'copy',
  },
};

async function buildPair(options) {
  await esbuild.build({
    ...sharedOptions,
    ...options,
    minify: false,
    legalComments: 'inline',
  });
  await esbuild.build({
    ...sharedOptions,
    ...options,
    minify: true,
    entryNames: '[dir]/[name].min',
    legalComments: 'none',
  });
}

async function buildAll() {
  console.log('\nBuilding...');

  await Promise.all([
    buildPair({
      entryPoints: ['src/js/screen.js', 'src/js/editor.js'],
      outdir: 'assets/js',
      format: 'esm',
    }),
    buildPair({
      entryPoints: ['src/scss/editor.scss', 'src/scss/admin.scss'],
      outdir: 'assets/css',
    }),
    buildPair({
      entryPoints: ['src/scss/style.scss'],
      outdir: '.',
    }),
  ]);

  console.log('Done.\n');
}

if (isWatch) {
  console.log('Watching for changes...');
  await buildAll();

  watch('src', { recursive: true }, async (_, filename) => {
    if (!filename) return;
    console.log(`Changed: ${filename}`);
    await buildAll().catch(console.error);
  });
} else {
  await buildAll();
}
