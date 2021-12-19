// Adiciona os modulos instalados
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

// Funçao para compilar o SASS e adicionar os prefixos
function compilaSass() {
    return gulp
        .src('_source/styles/styles.scss')
        .pipe(concat('styles-min.css'))
        .pipe(
            sass({
                outputStyle: 'compressed',
            }),
        )
        .pipe(
            autoprefixer({
                cascade: false,
            }),
        )
        .pipe(gulp.dest('dist/'));
}
// _source / SCSS Files
gulp.task('sass', function (done) {
  compilaSass();
  done();
});

// _source / JS Files
function gulpJS() {
    return gulp
        .src([
            '_source/scripts/partials/utilities.js',
            '_source/scripts/components/cFavoriteToggle.js',
            '_source/scripts/components/cForm.js',
            '_source/scripts/components/cHamburguer.js',
            '_source/scripts/components/cResponsiveGrid.js',
            '_source/scripts/components/cSmartMenu.js',
            '_source/scripts/components/cToggleList.js',
            '_source/scripts/components/cSwiperClients.js',
            '_source/scripts/layout/lNav.js',
            '_source/scripts/layout/lHeaderHome.js',
            '_source/scripts/sections/sDefaultGridSlider.js',
            '_source/scripts/components/cTabPlans.js'
        ])
        .pipe(concat('scripts-min.js'))
        .pipe(
            babel({
                presets: ['@babel/preset-env'],
            }),
        )
        .pipe(uglify())
        .pipe(gulp.dest('dist/'));
}
gulp.task('mainjs', gulpJS);

// Libraries / Plugins
function pluginJS() {
    return gulp
        .src([
            'node_modules/jquery/dist/jquery.min.js',
            '_source/libraries/isjs/is.min.js',
            '_source/libraries/_forms/forms.min.js',
            '_source/libraries/fancybox/jquery.fancybox.min.js',
            '_source/libraries/swiper/swiper.min.js',
            '_source/libraries/select2/dist/js/select2.js',
            '_source/libraries/select2/dist/js/i18n/pt-BR.js',
        ])
        .pipe(concat('libraries-min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/'));
}
gulp.task('pluginjs', pluginJS);
function pluginCSS() {
    return gulp
        .src([
            '_source/libraries/fancybox/jquery.fancybox.min.css',
            '_source/libraries/swiper/swiper.min.css',
            '_source/libraries/select2/dist/css/select2.min.css',
        ])
        .pipe(concat('libraries-min.css'))
        .pipe(gulp.dest('dist/'));
}
gulp.task('plugincss', pluginCSS);


// Função de watch do Gulp
function watch() {
  gulp.watch('_source/styles/**/*.scss', compilaSass);
  gulp.watch('_source/scripts/**/*.js', gulpJS);
  gulp.watch('_source/libraries/**/*.js*', pluginJS);
  gulp.watch('_source/libraries/**/*.css*', pluginCSS);
}

// Inicia a tarefa de watch
gulp.task('watch', watch);

// Tarefa padrão do Gulp, que inicia o watch e o browser-sync
gulp.task(
  'default',
  gulp.parallel('watch', 'sass', 'mainjs', 'pluginjs', 'plugincss'),
);
