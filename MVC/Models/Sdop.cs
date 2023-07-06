using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace sdop.Models
{
    public class Sdop
    {
        [Key]
        public int SdopId { get; set; }

        [Required]
        [MaxLength(150, ErrorMessage = "City Name must be less than or equal to 150 characters long")]
        public string City{ get; set; }

        public int Range { get; set; }

        [Range(0, 999)]
        public int SdopCapacity { get; set; }

        [Required]
        [StringLength(250)]
        public string SdopAddress { get; set; }

        [Range(0, 99)]
        public int SdopDeliveryTimeH { get; set; }

        public ICollection<Sdop> Sdops { get; set; } //Sell relationship

        public ICollection<Drug> Drugs { get; set; } //Drug relationship
    }
    public class SdopDBContext : DbContext
    {
        public DbSet<Sdop> Sdops { get; set; }
    }
}