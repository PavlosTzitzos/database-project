using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using sdop.Models;

namespace sdop.Controllers
{
    public class SalesmenController : Controller
    {
        private SalemanDBContext db = new SalemanDBContext();

        // GET: Salesmen
        public ActionResult Index()
        {
            return View(db.Salesmen.ToList());
        }

        // GET: Salesmen/Details/5
        public ActionResult Details(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Salesman salesman = db.Salesmen.Find(id);
            if (salesman == null)
            {
                return HttpNotFound();
            }
            return View(salesman);
        }

        // GET: Salesmen/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Salesmen/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "SalesmanSSN,Id,SalesmanFirstName,SalesmanLastName,SalesmanAge,SalesmanGender,SalesmanPhoneNumber,SalesmanYearsOfExperience,Salary")] Salesman salesman)
        {
            if (ModelState.IsValid)
            {
                db.Salesmen.Add(salesman);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(salesman);
        }

        // GET: Salesmen/Edit/5
        public ActionResult Edit(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Salesman salesman = db.Salesmen.Find(id);
            if (salesman == null)
            {
                return HttpNotFound();
            }
            return View(salesman);
        }

        // POST: Salesmen/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "SalesmanSSN,Id,SalesmanFirstName,SalesmanLastName,SalesmanAge,SalesmanGender,SalesmanPhoneNumber,SalesmanYearsOfExperience,Salary")] Salesman salesman)
        {
            if (ModelState.IsValid)
            {
                db.Entry(salesman).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(salesman);
        }

        // GET: Salesmen/Delete/5
        public ActionResult Delete(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Salesman salesman = db.Salesmen.Find(id);
            if (salesman == null)
            {
                return HttpNotFound();
            }
            return View(salesman);
        }

        // POST: Salesmen/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(long id)
        {
            Salesman salesman = db.Salesmen.Find(id);
            db.Salesmen.Remove(salesman);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
