using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace sdop.Models
{
    public class Salesman
    {
        public int Id { get; set; }

        [Key]
        [Required]
        [Range(0, 99999999999)]
        public long SalesmanSSN { get; set; }

        [Required]
        [StringLength(50)]
        public string SalesmanFirstName { get; set; }

        [Required]
        [StringLength(50)]
        public string SalesmanLastName { get; set; }

        [Range(0, 150)]
        public int SalesmanAge { get; set; }

        [Range(0, 1)]
        public int SalesmanGender { get; set; }

        [Range(0, 9999999999)]
        public long SalesmanPhoneNumber { get; set; }

        [Range(0, 100)]
        public int SalesmanYearsOfExperience { get; set; }

        [Range(0,5000)]
        public int Salary { get; set; }

        public Company Company { get; set; } // consist of relationship

        public Drug Drug { get; set; } // Promote relationship

        public ICollection<Doctor> Doctors { get; set; } //Visit relationship
    }
    public class SalemanDBContext : DbContext
    {
        public DbSet<Salesman> Salesmen { get; set; }
    }
}