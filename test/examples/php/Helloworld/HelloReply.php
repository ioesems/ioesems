
        #
        # Expected leaks:
        #
        #   [5, 5, 6]
        #   [10, 1, 1]
        return all(delta >= 1 for delta in deltas)

    def check_fd_deltas(deltas):
        return any(deltas)

    failed = False
    for deltas, item_name, checker in [
        (rc_deltas, 'references', check_rc_deltas),
        (alloc_deltas, 'memory blocks', check_rc_deltas),
        (fd_deltas, 'file descriptors', check_fd_deltas)
    ]:
        # ignore warmup runs
        deltas = deltas[nwarmup:]
        if checker(deltas):
            msg = '%s leaked %s %s, sum=%s' % (
                test_name, deltas, item_name, sum(deltas))
            print(msg, file=sys.stderr, flush=True)
            with open(fname, "a") as refrep:
                print(msg, file=refrep)
                refrep.flush()
            failed = True
    return failed


def dash_R_cleanup(fs, ps, pic, zdc, abcs):
    import copyreg
    import collections.abc

    # Restore some original values.
    warnings.filters[:] = fs
    copyreg.dispatch_table.clear()
    copyreg.dispatch_table.update(ps)
    sys.path_importer_cache.clear()
    sys.path_importer_cache.update(pic)
    try:
        import zipimport
    except ImportError:
        pass # Run unmodified on platforms without zipimport support
  