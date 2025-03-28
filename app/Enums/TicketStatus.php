<?php

namespace App\Enums;

enum TicketStatus: string
{
    case PENDING = 'pending';
    case OPENED = 'opened';
    case CLOSED = 'closed';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::OPENED => 'Opened',
            self::CLOSED => 'Closed',
        };
    }

    public function bgColor(): string
    {
        return match ($this) {
            self::PENDING => 'bg-slate-100',
            self::OPENED => 'bg-violet-100',
            self::CLOSED => 'bg-emerald-100',
        };
    }

    public function textColor(): string
    {
        return match ($this) {
            self::PENDING => 'text-slate-600',
            self::OPENED => 'text-violet-600',
            self::CLOSED => 'text-emerald-600',
        };
    }

    public function html(): string
    {
        return sprintf(
            '<span class="text-sm px-2 py-1 rounded %s %s"> %s </span>',
            $this->bgColor(),
            $this->textColor(),
            $this->label()
        );
    }
}
