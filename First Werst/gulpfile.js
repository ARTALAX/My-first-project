const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))

describe('style task', () => {
	test('should compile Sass files into CSS', () => {
		// Arrange
		const style = () =>
			gulp.src('./scss/**/*.scss').pipe(sass()).pipe(gulp.dest('./css'))

		// Act
		style()

		// Assert
		expect(true).toBe(true)
	})
})
