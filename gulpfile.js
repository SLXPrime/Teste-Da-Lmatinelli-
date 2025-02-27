const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');  // Plugin para concatenar arquivos

// Definindo a tarefa de compilar o Sass e concatenar
gulp.task('sass', function() {
    return gulp.src('./resources/scss/**/*.scss')  // Todos os arquivos .scss dentro da pasta resources/scss
        .pipe(sass().on('error', sass.logError))  // Compilando os arquivos Sass
        .pipe(concat('app.css'))  // Concatenando todos os arquivos .scss em um único app.css
        .pipe(gulp.dest('./public/css'));  // Salvando o arquivo app.css no diretório public/css
});

// Tarefa para observar mudanças nos arquivos .scss e executar a tarefa 'sass'
gulp.task('watch', function() {
    gulp.watch('./resources/scss/**/*.scss', gulp.series('sass'));  // Observando mudanças nos arquivos .scss
});

// Tarefa padrão
gulp.task('default', gulp.series('sass', 'watch'));
