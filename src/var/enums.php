<?php
declare(strict_types=1);

enum Status: string {
    case INACTIVE = 'inactive';
    case ACTIVE = 'active';
    case PENDING = 'pending';
}

enum Category: string {
    case MEMBER = 'member';
    case PERMIT = 'permit';
    case INDUSTRIALFIRE = 'industrial-fire';
    case REPORT = 'report';
    case TESTIMONIAL = 'testimonial';
    case PAGE = 'page';
}

enum PermitCategory: string {
    case ACTIVITY = 'activity';
    case CONSTRUCTION = 'construction';
}

enum IndustrialFireCategory: string {
    case RESIDENTIAL = 'residential';
    case INDUSTRIAL = 'industrial';
}

enum ReportCategory: string {
    case DAMAGE = 'damage';
    case STRUCTURAL = 'structural';
}

enum MemberCategory: string {
    case CLIENT = 'client';
    case PARTNER = 'partner';
    case STAFF = 'staff';
}

enum NavCategory: string {
    case PRIMARY = 'primary';
    case SECONDARY = 'secondary';
}
?>
