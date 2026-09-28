<?php
function e($value): string { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
function find_city(string $slug, array $cities): ?array { foreach ($cities as $city) if ($city['slug'] === strtolower($slug)) return $city; return null; }
function format_hours_minutes(float $hours): string { $minutes=max(1,(int)round($hours*60)); $h=intdiv($minutes,60); $m=$minutes%60; return $h ? $h.' hr'.($m?' '.$m.' min':'') : $m.' min'; }
function money(float $amount): string { return '$'.number_format($amount,2); }
function route_url(array $from,array $to,array $settings): string { return rtrim($settings['site_domain'],'/').'/flight-time/'.$from['slug'].'-to-'.$to['slug']; }
