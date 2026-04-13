<?php
declare(strict_types=1);

$randomTestimonial = $testimonials[array_rand($testimonials)];
?>
            <!-- Client Feedback -->
            <section class="testimonials bg-light shadow-lg">
                <div class="container py-4">
                    <blockquote class="text-center">
                        <h2>&ldquo;<?= e($randomTestimonial['text']) ?>&rdquo;</h2>
                        <footer class="text-muted fs-4">— <?= e($randomTestimonial['name']) ?></p>
                    </blockquote>
                </div>
            </section>
            <!-- End Client Feedback -->
