# CodeCraft Academy

CodeCraft Academy is a Laravel 12 learning platform with role-based dashboards, custom authentication, dynamic homepage content, and student learning workflows (enrollment, progress tracking, reviews, quizzes, assignments).

## Stack

- PHP 8.2+
- Laravel 12
- Jetstream + Fortify + Sanctum
- Livewire 3
- MySQL
- Vite + Tailwind CSS
- Pest/PHPUnit for tests

## Current Features

### Public Website

- Dynamic homepage sections:
  - Hero content from database
  - Featured courses
  - Testimonials
  - Pricing plans
  - FAQ
- Course listing and course details pages
- Blog listing and details
- About and Contact pages
- Ask AI route forwards to: https://agent-chat-bot.vercel.app/

### Authentication and Access

- Custom sign-in page at /signin
- Login supports email or username
- Google social login with role-aware onboarding (student/instructor)
- Role middleware guard for:
  - student
  - instructor
  - admin
- Dashboard redirect based on role

### Student Backend

Implemented backend actions for students:

- Enroll in courses
- Track lesson progress and auto-complete course at 100%
- Submit and update reviews
- Submit assignments
- Update profile and password
- View quiz attempts, assignments, enrollments, and dashboard stats

### Seeded Platform Content

Seeding creates sample:

- Categories, courses, modules, lessons
- Enrollments and lesson progress
- Student reviews and quiz attempts
- Assignments and submissions
- Blog post
- Homepage hero section
- FAQ items
- Testimonial
- Pricing plan

## Local Setup

1. Install dependencies:

```bash
composer install
npm install
```

2. Create environment file:

```bash
copy .env.example .env
```

3. Configure database in .env (defaults expected by this project):

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=codecraft_academy
DB_USERNAME=root
DB_PASSWORD=
```

4. Generate app key and run database:

```bash
php artisan key:generate
php artisan migrate:fresh --seed
```

5. Run app and assets:

```bash
php artisan serve --host=127.0.0.1 --port=8000
npm run dev
```

Alternative (single command dev stack):

```bash
composer run dev
```

## Demo Accounts

After seeding, you can use password: password

- Admin: admin@codecraft.test
- Instructor: instructor@codecraft.test
- Student: student@codecraft.test
- Extra seeded student: test@example.com

## Important Routes

### Public

- / -> homepage
- /course-list
- /course-details
- /blog
- /shop
- /about
- /contact
- /ask-ai -> external redirect

### Auth

- GET /signin
- POST /signin/custom
- POST /register
- GET /auth/google
- GET /auth/google/callback

### Student (auth + role:student)

- /student-dashboard
- /student-profile
- /student-enrolled-courses
- /student-reviews
- /student-my-quiz-attempts
- /student-assignments
- /student-settings
- POST /student-enrollments
- POST /student-enrollments/{enrollment}/progress
- POST /student-reviews
- DELETE /student-reviews/{review}
- POST /student-assignments/{assignment}/submit
- PUT /student-settings/profile
- PUT /student-settings/password

## Testing

Run all tests:

```bash
php artisan test
```

Run focused backend tests:

```bash
php artisan test --filter="StudentBackendTest|CourseAccessTest|UserLoginTest"
```

## Environment Variables

In addition to standard Laravel variables, this project includes optional keys:

- GOOGLE_CLIENT_ID
- GOOGLE_CLIENT_SECRET
- GOOGLE_REDIRECT_URI
- FIREBASE_PROJECT_ID
- FIREBASE_WEB_API_KEY
- FIREBASE_AUTH_DOMAIN
- FIREBASE_APP_ID
- FIREBASE_STORAGE_BUCKET
- FIREBASE_MESSAGING_SENDER_ID
- FIREBASE_SERVICE_ACCOUNT_PATH
- JUDGE0_API_KEY
- OLLAMA_BASE_URL

## Auth Notes

- Fortify email verification is currently disabled.
- Jetstream/Fortify two-factor authentication is currently disabled.
- The project currently uses role-based post-login redirects and a custom signin UX.

## Troubleshooting

If php artisan serve exits with code 1:

1. Ensure APP_KEY is set:

```bash
php artisan key:generate
```

2. Verify database exists and credentials are correct in .env.

3. Clear caches:

```bash
php artisan optimize:clear
```

4. Try another port:

```bash
php artisan serve --host=127.0.0.1 --port=8080
```

## License

This project uses the MIT license.